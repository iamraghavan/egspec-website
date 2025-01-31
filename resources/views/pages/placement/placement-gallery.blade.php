@extends('layouts.app')
@section('content')

@include('components.breadcrumb', [
    'value_1' => 'Placement',
    'value_2' => '',
    'value_3' => '',
    'page_title' => 'Placement Gallery'
])

<div class="rts-event-speaker mt--40" element-id="358">
    <div class="container" element-id="357">
        <div class="row" element-id="356">
            <div class="rts-section" element-id="355">
                <h3 class="rts-section-title animated fadeIn" element-id="354">
                    Placement Gallery
                </h3>
            </div>
        </div>
        <!-- event speaker list -->
        <div class="row g-5" element-id="353">
            <!-- Placeholder for images -->
        </div>
    </div>
</div>

<!-- Include Fancybox CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">

<!-- Include jQuery, Fancybox, and LazyLoad JS -->


<style>
    /* Style for the image */
    .iaps {
        max-width: 100% !important;
        height: auto !important;
        font-weight: 200;
        margin: 3rem;
    }

    /* Style for the heading */
    .iap-h3 {
        text-align: center !important;
        font-size: 18px !important;
        margin: 20px 0 !important;
        color: #333 !important;
    }
</style>
<!-- Include Firebase SDK v9+ -->

<script src="https://www.gstatic.com/firebasejs/9.10.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/9.10.0/firebase-storage.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lazyload@15.0.0/lazyload.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fancybox@3.5.7/dist/js/jquery.fancybox.min.js"></script>

<script>


    // Firebase configuration
    const firebaseConfig = {
      apiKey: "AIzaSyC7EsiaYH-tJj-wNEQl8ZrrmdvKCWS7ztY",
      authDomain: "egspj-bumblebees.firebaseapp.com",
      databaseURL: "https://egspj-bumblebees-default-rtdb.firebaseio.com",
      projectId: "egspj-bumblebees",
      storageBucket: "egspj-bumblebees.appspot.com",
      messagingSenderId: "3531307553",
      appId: "1:3531307553:web:162f525f3ed82d7830c160",
      measurementId: "G-6W931XY0SQ"
    };

    // Initialize Firebase
    const app = initializeApp(firebaseConfig);
    const storage = getStorage(app);

    // Fetch images from Firebase Storage
    const fetchImages = async () => {
      try {
        const storageRef = ref(storage, '/egspec-assets/placement-gallery/p');
        const result = await listAll(storageRef);
        const imageUrls = await getImageUrls(result.items);
        renderGallery(imageUrls);
      } catch (error) {
        handleError(error);
      }
    };

    // Retrieve download URLs for all images
    const getImageUrls = async (imageRefs) => {
      const promises = imageRefs.map(ref => getDownloadURL(ref));
      return await Promise.all(promises);
    };

    // Render the gallery in the DOM
    const renderGallery = (urls) => {
      const galleryRow = $('.row.g-5');
      galleryRow.empty(); // Clear any existing content

      urls.reverse().forEach((url, index) => {
        const imgHtml = createImageHtml(url, index);
        galleryRow.append(imgHtml);
      });

      initializeLazyLoad();
      initializeFancybox();
    };

    // Create HTML for each image
    const createImageHtml = (url, index) => {
      return `
        <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="event-speaker">
            <div class="event-speaker__details">
              <a href="${url}" data-fancybox="gallery" data-caption="Placement ${index + 1}">
                <img class="iaps lazyload" data-src="${url}" alt="Placement ${index + 1}">
              </a>
            </div>
          </div>
        </div>
      `;
    };

    // Initialize LazyLoad
    const initializeLazyLoad = () => {
      new LazyLoad({
        elements_selector: ".lazyload"
      });
    };

    // Initialize Fancybox
    const initializeFancybox = () => {
      Fancybox.bind('[data-fancybox="gallery"]', {
        buttons: ["zoom", "slideShow", "thumbs", "close"],
        caption: function (instance, item) {
          return $(this).data('caption');
        }
      });
    };

    // Handle errors
    const handleError = (error) => {
      console.error("Error:", error);
      alert("An error occurred while loading the gallery. Please try again later.");
    };

    // On document ready
    $(document).ready(() => {
      fetchImages();
    });

  </script>

@include('components.cta')
@endsection
