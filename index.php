
    <?php include 'header.php'; ?>
    <?php include 'mega-menu.php'; ?>
    <?php include 'breadcrumbs-and-h1.php'; ?>
    <div id="primary" class="content-area">
        <div class="container">
            <div class="row">
                <main id="main" class="col-xs-12 col-sm-8 col-md-8" role="main">
                    <article>
                        <div class="entry-header">
                            <h1>Order documents</h1>
                        </div>
                        <div class="entry-content clearfix">
                            <div class="arrow-steps clearfix"">
                                <ul>
                                    <li class="current"><span>1</span> Order details</li>
                                    <li><span>2</span> Check your order</li>
                                    <li><span>3</span> Complete</li>
                                </ul>
                            </div>
                            <div class="emphasis-block error-message" role="alert"><p class="h3">Sorry, there was a problem</p><p>Please check the highlighted fields to proceed.</p></div>
                            <h2>Order details</h2>
                            <p>To access documents onsite at The National Archives, you will need to know the following:</p>
                            <ul>
                                <li><b>Your reader’s ticket number</b>. If you don’t have one, <a href="https://secure.nationalarchives.gov.uk/login/yourdetails" title="">apply online for a reader’s ticket</a> - it only takes 15 minutes.</li>
                                <li><b>Date of visit</b>. The last chance to order onsite documents for next day delivery is 4pm. Orders held offsite will need to be ordered 3 working days in advance.</li>
                                <li><b>Catalogue reference(s)</b>. You can make a note of these by searching the catalogue in advance, or by searching from this page. You can order up to 12 documents.</li>
                            </ul>
                            <form action="" id="" class="" method="POST" novalidate="novalidate">
                                <p>Fields marked <span class="mandatory">&#42;</span> are compulsory</p>
                                <fieldset>
                                    <legend>Your reader's ticket</legend>
                                    <div class="form-row">
                                        <label for="readers_ticket">Reader's ticket number <span class="mandatory">&#42;</span></label>
                                        <input type="text" id="readers_ticket" name="readers_ticket" class="small" required>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <legend>Your documents</legend>
                                    <div class="form-row">
                                        <label for="date_of_visit">Date of visit <span class="mandatory">&#42;</span></label>
                                        <input type="text" id="date_of_visit" name="date_of_visit">
                                    </div>
                                    <div class="form-row">
                                        <p class="form-hint">Please enter your catalogue references in the fields below. To search the catalogue from this form, please click on the icon next to each field.</p>
                                    </div>
                                    <div class="form-row">
                                        <label for="reference_1">Document 1 <span class="mandatory">&#42;</span></span></label>
                                        <input type="text" id="reference_1" name="reference_1" class="medium form-warning"><a href=""><span class="scope-selector">&nbsp;</span></a>
                                        <span id="reference-1-error" class="form-error form-hint">Please insert a reference number</span>
                                    </div>
                                    <div class="form-row">
                                        <label for="reference_2">Document 2</label>
                                        <input type="text" id="reference_2" name="reference_1" class="medium"><a href=""><span class="scope-selector">&nbsp;</span></a>
                                    </div>
                                    <div class="form-row">
                                        <label for="reference_3">Document 3</label>
                                        <input type="text" id="reference_3" name="reference_1" class="medium"><a href=""><span class="scope-selector">&nbsp;</span></a>
                                    </div>
                                    <div class="form-row">
                                        <label for="reference_4">Document 4</label>
                                        <input type="text" id="reference_4" name="reference_1" class="medium"><a href=""><span class="scope-selector">&nbsp;</span></a>
                                    </div>
                                    <div class="form-row">
                                        <label for="reference_5">Document 5</label>
                                        <input type="text" id="reference_5" name="reference_1" class="medium"><a href=""><span class="scope-selector">&nbsp;</span></a>
                                    </div>
                                    <div class="form-row">
                                        <label for="reference_6">Document 6</label>
                                        <input type="text" id="reference_6" name="reference_1" class="medium"><a href=""><span class="scope-selector">&nbsp;</span></a>
                                    </div>
                                    <div class="form-row">
                                        <label for="reference_7">Document 7</label>
                                        <input type="text" id="reference_7" name="reference_1" class="medium"><a href=""><span class="scope-selector">&nbsp;</span></a>
                                    </div>
                                    <div class="form-row">
                                        <label for="reference_8">Document 8</label>
                                        <input type="text" id="reference_8" name="reference_1" class="medium"><a href=""><span class="scope-selector">&nbsp;</span></a>
                                    </div>
                                    <div class="form-row">
                                        <label for="reference_9">Document 9</label>
                                        <input type="text" id="reference_9" name="reference_1" class="medium"><a href=""><span class="scope-selector">&nbsp;</span></a>
                                    </div>
                                    <div class="form-row">
                                        <label for="reference_10">Document 10</label>
                                        <input type="text" id="reference_10" name="reference_1" class="medium"><a href=""><span class="scope-selector">&nbsp;</span></a>
                                    </div>
                                    <div class="form-row">
                                        <label for="reference_11">Document 11</label>
                                        <input type="text" id="reference_11" name="reference_1" class="medium"><a href=""><span class="scope-selector">&nbsp;</span></a>
                                    </div>
                                    <div class="form-row">
                                        <label for="reference_12">Document 12</label>
                                        <input type="text" id="reference_12" name="reference_1" class="medium"><a href=""><span class="scope-selector">&nbsp;</span></a>
                                    </div>
                                    <div class="form-row">
                                        <p class="form-hint">If you need to order more than 12 consecutive documents <b>from the same series</b>, you may be able to place a bulk order.</p>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <legend>Your details</legend>
                                    <div class="form-row">
                                        <label for="full_name">Full name <span class="mandatory">&#42;</span></label>
                                        <input type="text" id="full_name" name="full_name">
                                    </div>
                                    <div class="form-row">
                                        <label for="tel">Telephone (include area code) <span class="mandatory">&#42;</span></label>
                                        <input type="text" id="tel" name="tel">
                                    </div>
                                    <div class="form-row">
                                        <label for="email_address">Email </label>
                                        <input type="email" id="email" name="email">
                                    </div>
                                    <div class="form-row">
                                        <label for="requirements">Let us know in the box below if you must access this document on the date of your arrival as we cannot guarantee that all of the documents ordered will be available. Please also use this form to tell us if you have any accessibility requirements. </label>
                                        <textarea id="requirements" name="requirements" aria-required="false" required=""></textarea>
                                    </div>
                                    <div class="form-row">
                                        <label for="seat-number">If you would like to specify a particular table, please look at the <a href="http://www.nationalarchives.gov.uk/documents/document-reading-room.pdf" title="">floor plan</a> (PDF, 526kb) and enter the seat number here.</label>
                                        <input type="text" id="seat_number" name="seat_number" class="small">
                                    </div>
                                </fieldset>
                                <div class="form-row checkbox"><input type="checkbox" id="privacy_policy" name="privacy_policy" value="Yes"><label for="privacy_policy">I have read and agree to The National Archives' <a href="http://www.nationalarchives.gov.uk/legal/privacy.htm" title="Opens in a new window" target="_blank">privacy statement </a> <span class="mandatory">&#42;</span></label></div>
                                <div class="form-row submit"><input type="submit" name="submit-rre" id="submit-tna-form" value="Continue"></div>
                            </form>
                        </div>
                    </article>
                </main>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
