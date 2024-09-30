@extends('layouts.app')
@section('content')

@include('components.breadcrumb', ['value_1' => 'Admissions',
'value_2' => 'Admission Procedure',
'value_3' => 'Postgraduate',
'page_title' => 'Admission Procedure - Postgraduate' ])

<div class="rts-page-content rts-section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="admission-content-top">
                    <h3 class="rts-section-title animated fadeIn">
                        PG Programmes
                    </h3>



                    <div class="requirement-deadline">

                        <div class="requirement-deadline__content">
                            <div class="application-deadline__content">
                                <div class="application-deadline__content--table">
                                    <table class="table table-striped table-hover table-bordered">
                                        <thead class="table-theme">
                                            <tr>
                                                <td>S.No</td>
                                                <td>Requirement</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Passed an appropriate Degree Examination of Anna University or any other examination of any University or authority accepted by the Syndicate of Anna University as equivalent thereto.</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <p>Note: The decision of the Management will be final in all matters relating to Admission, Discipline & Training and will be binding on all the parties concerned.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
