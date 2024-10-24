<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

if (!function_exists('getLastCommitDate')) {
    /**
     * Fetches the date of the last commit for a specified repository and tag.
     *
     * @param string $repository The GitHub repository (owner/repo).
     * @param string $tag The specific tag or branch to query.
     * @return string The formatted commit date or an error message.
     */
    function getLastCommitDate($repository = 'iamraghavan/egspec-website', $tag = 'v2.5')
    {
        // Validate repository and tag
        if (!isValidRepository($repository) || !isValidTag($tag)) {
            return 'Invalid repository or tag.';
        }

        $url = buildCommitUrl($repository, $tag);

        try {
            $response = Http::get($url);
            return handleResponse($response);
        } catch (\Exception $e) {
            return handleError($e);
        }
    }

    /**
     * Validates the repository format.
     *
     * @param string $repository
     * @return bool
     */
    function isValidRepository($repository)
    {
        return preg_match('/^[\w.-]+\/[\w.-]+$/', $repository);
    }

    /**
     * Validates the tag or branch format.
     *
     * @param string $tag
     * @return bool
     */
    function isValidTag($tag)
    {
        return preg_match('/^[\w.-]+$/', $tag);
    }

    /**
     * Constructs the GitHub API URL for the commit.
     *
     * @param string $repository The GitHub repository.
     * @param string $tag The specific tag or branch.
     * @return string The constructed URL.
     */
    function buildCommitUrl($repository, $tag)
    {
        return "https://api.github.com/repos/{$repository}/commits?sha={$tag}";
    }

    /**
     * Handles the response from the GitHub API.
     *
     * @param \Illuminate\Http\Client\Response $response The response object.
     * @return string The formatted commit date or an error message.
     */
    function handleResponse($response)
    {
        if ($response->successful()) {
            $data = $response->json();
            $commitDate = $data[0]['commit']['committer']['date'] ?? null; // Changed to access the first commit

            if ($commitDate) {
                return formatCommitDate($commitDate);
            }
        }

        return 'Could not retrieve the commit date. Please check the repository and tag.';
    }

    /**
     * Formats the commit date to 'Y-m-d h:i:s A'.
     *
     * @param string $commitDate The commit date string.
     * @return string The formatted date.
     */
    function formatCommitDate($commitDate)
    {
        return date('Y-m-d h:i:s A', strtotime($commitDate));
    }

    /**
     * Handles exceptions and logs errors.
     *
     * @param \Exception $e The caught exception.
     * @return string User-friendly error message.
     */
    function handleError(\Exception $e)
    {
        Log::error('Failed to fetch the last commit date: ' . $e->getMessage());
        return 'An error occurred while fetching the commit date. Please try again later.';
    }
}
