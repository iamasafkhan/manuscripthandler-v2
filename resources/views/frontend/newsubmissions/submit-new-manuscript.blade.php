@extends('layouts.list')
@section('title', 'Authors Panel')
@section('content')

    <section class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="index.html">Home</a></li>
                <li>Inner Page</li>
            </ol>
            <h2>Inner Page</h2>

        </div>
    </section>
    <!-- End Breadcrumbs -->

    <section id="services" class="services">

        <div class="container aos-init aos-animate" data-aos="fade-up">

            <header class="section-header">

            </header>

            <div class="row">
                <div class="col-md-12">
                    <h3>Manuscript Handler - Author's Panel</h3>
                    <p>To proceed with the submission of a new manuscript, click on the “Submit New Manuscript” section. All
                        incomplete submissions will be placed in the “Incomplete Submissions”. If all the required
                        information is completed, a final
                        PDF has to be generated for approval by the author. This manuscript will be under “Waiting for
                        Author’s Approval”. Once approved, the article will be submitted and will be moved to “Submissions
                        Being Processed” section. Please
                        note that for a successful submitted manuscript, that manuscript must be under “Submissions Being
                        Processed” and you must have received a confirmatory email on your provided email address.</p>



                    <p>Awaiting Reviewer Selection: Manuscript is not yet assigned to any reviewers</p>
                    <p>Awaiting Reviewers Consent: Manuscript has been assigned to reviewers and we are waiting to hear the
                        consent of reviewers whether they are willing or not to review this manuscript.</p>

                    <p>Awaiting Editor's Decision: The review process is completed and now manuscript is with Editor for the
                        final decision</p>

                    <p>If you feel any difficulties in submitting your manuscript via this Manuscript Handler, please
                        contact us at info@manuscripthandler.com and state the issue.</p>

                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered">
                        <thead class="bg-success text-white">
                            <tr>
                                <td>
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Select All: Author's Checklist
                                    </label>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        An acknowledgement that the manuscript has not been published or submitted to other
                                        journals previously is included.
                                    </label>
                                </td>
                                
                            </tr>
                            <tr>
                                <td><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        An acknowledgement that all authors have contributed significantly and that all authors are in agreement with the content of the manuscript is included.
                                    </label>
                                </td>
                                
                            </tr><tr>
                                <td><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        An acknowledgement that all authors agree to the conditions outlined in the copyright assignment form is included.
                                    </label>
                                </td>
                                
                            </tr>
                        </tbody>
                    </table>
                    <table class="Flow_Table" width="100%">
                        <tbody>

                            <tr>
                                <td colspan="11">
                                    <span class="flowCross bg-dark text-white">Author's Checklist</span>
                                    <img src="https://manuscripthandler.com/images/arr.gif" height="15"
                                        style="margin-bottom:-3px;">

                                    <span class="flowCross bg-dark text-white">Type, Title, &amp; Abstract</span>
                                    <img src="https://manuscripthandler.com/images/arr.gif" height="15"
                                        style="margin-bottom:-3px;">

                                    <span class="flowCross bg-dark text-white">Authors &amp; Institutions</span>
                                    <img src="https://manuscripthandler.com/images/arr.gif" height="15"
                                        style="margin-bottom:-3px;">


                                    <span class="flowCross bg-dark text-white">File Upload</span>
                                    <img src="https://manuscripthandler.com/images/arr.gif" height="15"
                                        style="margin-bottom:-3px;">

                                    <span class="flowCross bg-dark text-white">Proof &amp; Submit</span>


                                </td>

                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>

    </section>


@endsection
