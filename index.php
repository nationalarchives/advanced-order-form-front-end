
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
                            <div class="emphasis-block error-message" role="alert"><h2>Sorry, there were the following problems:</h2>
                            <ul>
                                <li>Please insert a valid day</li>
                                <li>Please insert a valid reference number</li>
                            </ul></div>
                            <h2>Order details</h2>
                            <p>To access documents onsite at The National Archives, you will need to know the following:</p>
                            <ul>
                                <li><b>Your reader’s ticket number</b>. If you don’t have one, <a href="https://secure.nationalarchives.gov.uk/login/yourdetails" title="">apply online for a reader’s ticket</a> - it only takes 15 minutes.</li>
                                <li><b>Date of visit</b>. The last chance to order onsite documents for next day delivery is 4pm. Orders held offsite will need to be ordered 3 working days in advance.</li>
                                <li><b>Catalogue reference(s)</b>. You can make a note of these by searching the catalogue in advance, or by searching from this page. You can order up to 12 documents.</li>
                            </ul>
                            <form action="step-2.php" method="POST" name="orderform" id="orderform">
                                <fieldset>
                                    <legend>Your reader's ticket</legend>
                                    <div class="form-row">
                                        <label for="readers_ticket">Reader's ticket number</label>
                                        <input type="text" id="readers_ticket" name="readers_ticket" class="small" required aria-required="true">
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <legend>Your documents</legend>
                                    <div class="form-row">
                                        <p id="dov"><b>Date of visit</b></p>
                                        <span id="date-of-visit-error" class="form-error form-hint">Please insert a valid day</span>
                                        <div id="groupErrorPlacement">
                                            <span class="dob-col day">
                                                <label id="day" for="dov_day">Day</label>
                                                <select type="number" aria-labelledby="dov day" id="dov_day" name="dov_day" class="form-warning" aria-describedby="date-of-visit-error">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>7</option>
                                                    <option>8</option>
                                                    <option>9</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                    <option>13</option>
                                                    <option>14</option>
                                                    <option>15</option>
                                                    <option>16</option>
                                                    <option>17</option>
                                                    <option>18</option>
                                                    <option>19</option>
                                                    <option>20</option>
                                                    <option>21</option>
                                                    <option>22</option>
                                                    <option>23</option>
                                                    <option>24</option>
                                                    <option>25</option>
                                                    <option>26</option>
                                                    <option>27</option>
                                                    <option>28</option>
                                                    <option>29</option>
                                                    <option>30</option>
                                                    <option>31</option>
                                                </select>
                                            </span>
                                            <span class="dob-col month">
                                                <label id="month" for="dov_month">Month</label>
                                                <select type="number" aria-labelledby="dov month" id="dov_month" name="dov_month">
                                                    <option>Jan</option>
                                                    <option>Feb</option>
                                                    <option>Mar</option>
                                                    <option>Apr</option>
                                                    <option>May</option>
                                                    <option>Jun</option>
                                                    <option>Jul</option>
                                                    <option>Aug</option>
                                                    <option>Sep</option>
                                                    <option>Oct</option>
                                                    <option>Nov</option>
                                                    <option>Dec</option>
                                                </select>
                                            </span>
                                            <span class="dob-col year">
                                                <label id="year" for="dov_year">Year</label>
                                                <select type="number" aria-labelledby="dov year" id="dov_year" name="dov_year">
                                                    <option>2018</option>
                                                    <option>2019</option>
                                                </select>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <p class="form-hint">Please enter your catalogue references in the fields below. To search the catalogue from this form, please click on the icon next to each field.</p>
                                    </div>
                                    <div class="form-row">
                                        <label for="reference_1">Document 1</label>
                                        <span id="reference-1-error" class="form-error form-hint">Please insert a reference number</span>
                                        <input type="text" id="reference_1" name="reference_1" class="medium form-warning" required aria-required="true" aria-describedby="reference-1-error"><a href=""><span class="scope-selector">&nbsp;</span></a>
                                    </div>
                                    <div class="form-row">
                                        <label for="reference_2">Document 2 <span class="optional">(optional)</span></label>
                                        <input type="text" id="reference_2" name="reference_2" class="medium"><a href=""><span class="scope-selector">&nbsp;</span></a>
                                    </div>
                                    <div class="form-row">
                                        <label for="reference_3">Document 3 <span class="optional">(optional)</span></label>
                                        <input type="text" id="reference_3" name="reference_3" class="medium"><a href=""><span class="scope-selector">&nbsp;</span></a>
                                    </div>
                                    <div class="form-row">
                                        <label for="reference_4">Document 4 <span class="optional">(optional)</span></label>
                                        <input type="text" id="reference_4" name="reference_4" class="medium"><a href=""><span class="scope-selector">&nbsp;</span></a>
                                    </div>
                                    <div class="form-row">
                                        <label for="reference_5">Document 5 <span class="optional">(optional)</span></label>
                                        <input type="text" id="reference_5" name="reference_5" class="medium"><a href=""><span class="scope-selector">&nbsp;</span></a>
                                    </div>
                                    <div class="form-row">
                                        <label for="reference_6">Document 6 <span class="optional">(optional)</span></label>
                                        <input type="text" id="reference_6" name="reference_6" class="medium"><a href=""><span class="scope-selector">&nbsp;</span></a>
                                    </div>
                                    <div class="form-row">
                                        <label for="reference_7">Document 7 <span class="optional">(optional)</span></label>
                                        <input type="text" id="reference_7" name="reference_7" class="medium"><a href=""><span class="scope-selector">&nbsp;</span></a>
                                    </div>
                                    <div class="form-row">
                                        <label for="reference_8">Document 8 <span class="optional">(optional)</span></label>
                                        <input type="text" id="reference_8" name="reference_8" class="medium"><a href=""><span class="scope-selector">&nbsp;</span></a>
                                    </div>
                                    <div class="form-row">
                                        <label for="reference_9">Document 9 <span class="optional">(optional)</span></label>
                                        <input type="text" id="reference_9" name="reference_9" class="medium"><a href=""><span class="scope-selector">&nbsp;</span></a>
                                    </div>
                                    <div class="form-row">
                                        <label for="reference_10">Document 10 <span class="optional">(optional)</span></label>
                                        <input type="text" id="reference_10" name="reference_10" class="medium"><a href=""><span class="scope-selector">&nbsp;</span></a>
                                    </div>
                                    <div class="form-row">
                                        <label for="reference_11">Document 11 <span class="optional">(optional)</span></label>
                                        <input type="text" id="reference_11" name="reference_11" class="medium"><a href=""><span class="scope-selector">&nbsp;</span></a>
                                    </div>
                                    <div class="form-row">
                                        <label for="reference_12">Document 12 <span class="optional">(optional)</span></label>
                                        <input type="text" id="reference_12" name="reference_12" class="medium"><a href=""><span class="scope-selector">&nbsp;</span></a>
                                    </div>
                                    <div class="form-row">
                                        <p class="form-hint">If you need to order more than 12 consecutive documents <b>from the same series</b>, you may be able to place a bulk order.</p>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <legend>Your details</legend>
                                    <div class="form-row">
                                        <label for="full_name">Full name</label>
                                        <input type="text" id="full_name" name="full_name" required aria-required="true">
                                    </div>
                                    <div class="form-row">
                                        <label for="tel">Telephone (include area code)</label>
                                        <input type="text" id="tel" name="tel" required aria-required="true">
                                    </div>
                                    <div class="form-row">
                                        <label for="email_address">Email <span class="optional">(optional)</span></label>
                                        <input type="email" id="email" name="email">
                                    </div>
                                    <div class="form-row">
                                        <label for="requirements">Let us know in the box below if you must access this document on the date of your arrival as we cannot guarantee that all of the documents ordered will be available. Please also use this form to tell us if you have any accessibility requirements. <span class="optional">(optional)</span></label>
                                        <textarea id="requirements" name="requirements"></textarea>
                                    </div>
                                    <div class="form-row">
                                        <label for="seat-number">If you would like to specify a particular table, please look at the <a href="http://www.nationalarchives.gov.uk/documents/document-reading-room.pdf" title="">floor plan</a> (PDF, 526kb) and enter the seat number here. <span class="optional">(optional)</span></label>
                                        <input type="text" id="seat_number" name="seat_number" class="small">
                                    </div>
                                </fieldset>
                                <div class="form-row checkbox"><input type="checkbox" id="privacy_policy" name="privacy_policy" value="Yes" required aria-required="true"><label for="privacy_policy">I have read and agree to The National Archives' <a href="http://www.nationalarchives.gov.uk/legal/privacy.htm" title="Opens in a new window" target="_blank">privacy statement </a></label></div>
                                <div class="form-row submit"><input type="submit" name="submit-rre" id="submit-tna-form" value="Continue"></div>
                            </form>
                        </div>
                    </article>
                </main>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
