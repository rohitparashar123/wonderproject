@extends('front/master')
@section('title','Document Center | FAQ')
@section('content')
    <div class="faq">
        <div class="container">
            <h1>FAQ</h1>
            <div class="row">
                <div class="offset-md-2 col-md-8 offset-md-2">
                    <div class="inner-padding">
                        <div class="block-item-list">
                            <div class="item">
                                <div class="question">
                                    <h2>What service does Wonder.Legal offer?</h2>
                                </div>
                                <div class="reponse">
                                    <p>The site allows you to create personalised legal documents:</p>
                                    <ul>
                                        <li>You choose a document.</li>
                                        <li>You create the document by completing a questionnaire. <b>The document is
                                                created before your eyes</b> as you respond to the questions.</li>
                                        <li>You can buy the document for <b>immediate download</b> in <b>Word and
                                                PDF</b> formats. You can then modify it and reuse it however you wish,
                                            according to your needs.</li>


                                    </ul>
                                </div>
                            </div>
                            <hr>
                            <div class="item">
                                <div class="question">
                                    <h2>How much does a document cost?</h2>
                                </div>
                                <div class="reponse">
                                    <p>A document costs <b>between ₹&nbsp;199 and ₹&nbsp;2,999</b>, with an average
                                        price of ₹&nbsp;879.</p>
                                    <p>The price of each document depends on its length and popularity. The price is
                                        shown when you reach the end of the form.</p>
                                    <p>To see how much a document costs without filling out the form, simply open the
                                        form and click "next," without typing anything into the form, until the price is
                                        displayed. If the price is acceptable, you can then go back to the beginning and
                                        fill out the form.</p>
                                </div>
                            </div>
                            <hr>

                            <div class="item">
                                <div class="question">
                                    <h2>How do you complete and customise a document?</h2>
                                </div>
                                <div class="reponse">
                                    <p>First, choose the kind of document you want to create. Then you'll be taken to a
                                        page with a form to fill out on the left and a document on the right.</p>
                                    <p><b>The document is generated one section at a time</b> as you respond to the
                                        questionnaire. Clauses are added or removed, paragraphs are modified, words are
                                        changed, etc.</p>
                                    <p>At the end, you can download the document in <b>Word and PDF</b> formats. You can
                                        then <b>modify the Word document</b> and <b>reuse</b> it however you wish.</p>
                                </div>
                            </div>
                            <hr>


                            <div class="item">
                                <div class="question">
                                    <h2>I purchased a document, but didn't receive it by email. What should I do?</h2>
                                </div>
                                <div class="reponse">
                                    <p>It's very rare, but it can happen.</p>
                                    <p>Don't worry, just follow the instructions for <a
                                            href="{{url('/recovery-document')}}">recovering a document</a>.</p>
                                </div>
                            </div>

                            <hr>

                            <div class="item">
                                <div class="question">
                                    <h2>Who creates the templates?</h2>
                                </div>
                                <div class="reponse">
                                    <p>The templates are created by <b>lawyers and legal experts.</b></p>
                                    <p>Our team of writers is continually growing as the site becomes more and more
                                        successful.</p>
                                </div>
                            </div>
                            <hr>
                            <div class="item">
                                <div class="question">
                                    <h2>Who reviews my document?</h2>
                                </div>
                                <div class="reponse">
                                    <p>No one. <b>Documents are not reviewed by a human.</b></p>
                                    <p>Lawyers and legal experts are the ones who first create the templates. Then our
                                        computer program automatically builds your document based on the responses you
                                        provide in the form.</p>
                                    <p>Our templates cover most typical cases. <b>Have your document reviewed by a
                                            lawyer</b> if you think the template may not work for your specific case.
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <div class="item">
                                <div class="question">
                                    <h2>Do I have to answer every question in the form?</h2>
                                </div>
                                <div class="reponse">
                                    <p>No, but we recommend that you do.</p>
                                    <p><b>The document is created based on your responses.</b> Some questions only fill
                                        in blanks in the template. Others add or remove entire paragraphs. That's why we
                                        recommend that you answer the questions carefully.</p>
                                    <p>If you don't know how to respond, you will find help text next to each item in
                                        the form to guide you.</p>
                                </div>
                            </div>
                            <hr>
                            <div class="item">
                                <div class="question">
                                    <h2>Are you a law firm?</h2>
                                </div>

                                <div class="reponse">
                                    <p>No. The site is created by Miracle, an IT company.</p>
                                    <p>We are not a substitute for a lawyer; rather, we <b>offer a technical solution
                                            for creating documents.</b> We do not give legal advice and we do not tell
                                        you which document to choose or how to complete it.</p>
                                </div>
                            </div>
                            <hr>
                            <div class="item">
                                <div class="question">
                                    <h2>Is the information I enter into my documents confidential?</h2>
                                </div>
                                <div class="reponse">
                                    <p>Yes! <b>The information you enter when you fill out a document is encrypted.</b>
                                        Even we cannot read it, much less share it with others.</p>
                                </div>
                            </div>
                            <hr>
                            <div class="item last">
                                <div class="question">
                                    <h2>Is the site secure?</h2>
                                </div>
                                <div class="reponse">
                                    <p><b>Every part of the website is secure</b>, including the code, the servers, and
                                        of course, the data you enter.</p>
                                    <p>

                                    </p>
                                    <p>We never have access to your credit or debit card number or login credentials.
                                    </p>
                                </div>
                            </div>



                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection