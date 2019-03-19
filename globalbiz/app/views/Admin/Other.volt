<div class="pull-left"><a class="btn btn-sm btn-primary active" href="../Admin"><h5>Centre For Excellence Consultancy </h5></a></div>
<br><br><br>
<div class="container-fluid">
    <center>{{ flash.output() }}</center>
    <div class="row">
        <div class="col-sm-3">
            <center><h1 class="badge">Actions</h1></center>
        </div>
        <div class="col-sm-3">
            <center><h1 class="badge">Actions</h1></center>
        </div>
        <div class="col-sm-3">
            <center><h1 class="badge">New Sub Agent Creation</h1></center>
            <form class="form" method="post" action="{{ url('Admin/CreateSubAgent') }}">
                <div class="form-group">
                    <input name="firstname" type="text" class="form-control" placeholder="Sub Agent First Name" required="required">
                </div>
                <div class="form-group">
                    <input name="lastname" type="text" class="form-control" placeholder="Sub Agent Last Name" required="required">
                </div>
                <div class="form-group">
                    <input name="email" type="email" class="form-control" placeholder="Sub Agent Email" required="required">
                </div>
                <div class="form-group">
                    <input name="pass" type="text" class="form-control" placeholder="Sub Agent Password" required="required">
                </div>
                <div class="form-group">
                    <select class="form-control" required="required" name="country">
                <option>Select a country</option>
                <option value="Afghanistan" title="Afghanistan">Afghanistan</option>
                <option value="Åland Islands" title="Åland Islands">Åland Islands</option>
                <option value="Albania" title="Albania">Albania</option>
                <option value="Algeria" title="Algeria">Algeria</option>
                <option value="American Samoa" title="American Samoa">American Samoa</option>
                <option value="Andorra" title="Andorra">Andorra</option>
                <option value="Angola" title="Angola">Angola</option>
                <option value="Anguilla" title="Anguilla">Anguilla</option>
                <option value="Antarctica" title="Antarctica">Antarctica</option>
                <option value="Antigua and Barbuda" title="Antigua and Barbuda">Antigua and Barbuda</option>
                <option value="Argentina" title="Argentina">Argentina</option>
                <option value="Armenia" title="Armenia">Armenia</option>
                <option value="Aruba" title="Aruba">Aruba</option>
                <option value="Australia" title="Australia">Australia</option>
                <option value="Austria" title="Austria">Austria</option>
                <option value="Azerbaijan" title="Azerbaijan">Azerbaijan</option>
                <option value="Bahamas" title="Bahamas">Bahamas</option>
                <option value="Bahrain" title="Bahrain">Bahrain</option>
                <option value="Bangladesh" title="Bangladesh">Bangladesh</option>
                <option value="Barbados" title="Barbados">Barbados</option>
                <option value="Belarus" title="Belarus">Belarus</option>
                <option value="Belgium" title="Belgium">Belgium</option>
                <option value="Belize" title="Belize">Belize</option>
                <option value="Benin" title="Benin">Benin</option>
                <option value="Bermuda" title="Bermuda">Bermuda</option>
                <option value="Bhutan" title="Bhutan">Bhutan</option>
                <option value="Bolivia, Plurinational State of" title="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option>
                <option value="Bonaire, Sint Eustatius and Saba" title="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
                <option value="Bosnia and Herzegovina" title="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                <option value="Botswana" title="Botswana">Botswana</option>
                <option value="Bouvet Island" title="Bouvet Island">Bouvet Island</option>
                <option value="Brazil" title="Brazil">Brazil</option>
                <option value="British Indian Ocean Territory" title="British Indian Ocean Territory">British Indian Ocean Territory</option>
                <option value="Brunei Darussalam" title="Brunei Darussalam">Brunei Darussalam</option>
                <option value="Bulgaria" title="Bulgaria">Bulgaria</option>
                <option value="Burkina Faso" title="Burkina Faso">Burkina Faso</option>
                <option value="Burundi" title="Burundi">Burundi</option>
                <option value="Cambodia" title="Cambodia">Cambodia</option>
                <option value="Cameroon" title="Cameroon">Cameroon</option>
                <option value="Canada" title="Canada">Canada</option>
                <option value="Cape Verde" title="Cape Verde">Cape Verde</option>
                <option value="Cayman Islands" title="Cayman Islands">Cayman Islands</option>
                <option value="Central African Republic" title="Central African Republic">Central African Republic</option>
                <option value="Chad" title="Chad">Chad</option>
                <option value="Chile" title="Chile">Chile</option>
                <option value="China" title="China">China</option>
                <option value="Christmas Island" title="Christmas Island">Christmas Island</option>
                <option value="Cocos (Keeling) Islands" title="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                <option value="Colombia" title="Colombia">Colombia</option>
                <option value="Comoros" title="Comoros">Comoros</option>
                <option value="Congo" title="Congo">Congo</option>
                <option value="Congo, the Democratic Republic of the" title="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>
                <option value="Cook Islands" title="Cook Islands">Cook Islands</option>
                <option value="Costa Rica" title="Costa Rica">Costa Rica</option>
                <option value="Côte d'Ivoire" title="Côte d'Ivoire">Côte d'Ivoire</option>
                <option value="Croatia" title="Croatia">Croatia</option>
                <option value="Cuba" title="Cuba">Cuba</option>
                <option value="Curaçao" title="Curaçao">Curaçao</option>
                <option value="Cyprus" title="Cyprus">Cyprus</option>
                <option value="Czech Republic" title="Czech Republic">Czech Republic</option>
                <option value="Denmark" title="Denmark">Denmark</option>
                <option value="Djibouti" title="Djibouti">Djibouti</option>
                <option value="Dominica" title="Dominica">Dominica</option>
                <option value="Dominican Republic" title="Dominican Republic">Dominican Republic</option>
                <option value="Ecuador" title="Ecuador">Ecuador</option>
                <option value="Egypt" title="Egypt">Egypt</option>
                <option value="El Salvador" title="El Salvador">El Salvador</option>
                <option value="Equatorial Guinea" title="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Eritrea" title="Eritrea">Eritrea</option>
                <option value="Estonia" title="Estonia">Estonia</option>
                <option value="Ethiopia" title="Ethiopia">Ethiopia</option>
                <option value="Falkland Islands (Malvinas)" title="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                <option value="Faroe Islands" title="Faroe Islands">Faroe Islands</option>
                <option value="Fiji" title="Fiji">Fiji</option>
                <option value="Finland" title="Finland">Finland</option>
                <option value="France" title="France">France</option>
                <option value="French Guiana" title="French Guiana">French Guiana</option>
                <option value="French Polynesia" title="French Polynesia">French Polynesia</option>
                <option value="French Southern Territories" title="French Southern Territories">French Southern Territories</option>
                <option value="Gabon" title="Gabon">Gabon</option>
                <option value="Gambia" title="Gambia">Gambia</option>
                <option value="Georgia" title="Georgia">Georgia</option>
                <option value="Germany" title="Germany">Germany</option>
                <option value="Ghana" title="Ghana">Ghana</option>
                <option value="Gibraltar" title="Gibraltar">Gibraltar</option>
                <option value="Greece" title="Greece">Greece</option>
                <option value="Greenland" title="Greenland">Greenland</option>
                <option value="Grenada" title="Grenada">Grenada</option>
                <option value="Guadeloupe" title="Guadeloupe">Guadeloupe</option>
                <option value="Guam" title="Guam">Guam</option>
                <option value="Guatemala" title="Guatemala">Guatemala</option>
                <option value="Guernsey" title="Guernsey">Guernsey</option>
                <option value="Guinea" title="Guinea">Guinea</option>
                <option value="Guinea-Bissau" title="Guinea-Bissau">Guinea-Bissau</option>
                <option value="Guyana" title="Guyana">Guyana</option>
                <option value="Haiti" title="Haiti">Haiti</option>
                <option value="Heard Island and McDonald Islands" title="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
                <option value="Holy See (Vatican City State)" title="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                <option value="Honduras" title="Honduras">Honduras</option>
                <option value="Hong Kong" title="Hong Kong">Hong Kong</option>
                <option value="Hungary" title="Hungary">Hungary</option>
                <option value="Iceland" title="Iceland">Iceland</option>
                <option value="India" title="India">India</option>
                <option value="Indonesia" title="Indonesia">Indonesia</option>
                <option value="Iran, Islamic Republic of" title="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                <option value="Iraq" title="Iraq">Iraq</option>
                <option value="Ireland" title="Ireland">Ireland</option>
                <option value="Isle of Man" title="Isle of Man">Isle of Man</option>
                <option value="Israel" title="Israel">Israel</option>
                <option value="Italy" title="Italy">Italy</option>
                <option value="Jamaica" title="Jamaica">Jamaica</option>
                <option value="Japan" title="Japan">Japan</option>
                <option value="Jersey" title="Jersey">Jersey</option>
                <option value="Jordan" title="Jordan">Jordan</option>
                <option value="Kazakhstan" title="Kazakhstan">Kazakhstan</option>
                <option value="Kenya" title="Kenya">Kenya</option>
                <option value="Kiribati" title="Kiribati">Kiribati</option>
                <option value="Korea, Democratic People's Republic of" title="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                <option value="Korea, Republic of" title="Korea, Republic of">Korea, Republic of</option>
                <option value="Kuwait" title="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan" title="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Lao People's Democratic Republic" title="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                <option value="Latvia" title="Latvia">Latvia</option>
                <option value="Lebanon" title="Lebanon">Lebanon</option>
                <option value="Lesotho" title="Lesotho">Lesotho</option>
                <option value="Liberia" title="Liberia">Liberia</option>
                <option value="Libya" title="Libya">Libya</option>
                <option value="Liechtenstein" title="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania" title="Lithuania">Lithuania</option>
                <option value="Luxembourg" title="Luxembourg">Luxembourg</option>
                <option value="Macao" title="Macao">Macao</option>
                <option value="Macedonia, the former Yugoslav Republic of" title="Macedonia, the former Yugoslav Republic of">Macedonia, the former Yugoslav Republic of</option>
                <option value="Madagascar" title="Madagascar">Madagascar</option>
                <option value="Malawi" title="Malawi">Malawi</option>
                <option value="Malaysia" title="Malaysia">Malaysia</option>
                <option value="Maldives" title="Maldives">Maldives</option>
                <option value="Mali" title="Mali">Mali</option>
                <option value="Malta" title="Malta">Malta</option>
                <option value="Marshall Islands" title="Marshall Islands">Marshall Islands</option>
                <option value="Martinique" title="Martinique">Martinique</option>
                <option value="Mauritania" title="Mauritania">Mauritania</option>
                <option value="Mauritius" title="Mauritius">Mauritius</option>
                <option value="Mayotte" title="Mayotte">Mayotte</option>
                <option value="Mexico" title="Mexico">Mexico</option>
                <option value="Micronesia, Federated States of" title="Micronesia, Federated States of">Micronesia, Federated States of</option>
                <option value="Moldova, Republic of" title="Moldova, Republic of">Moldova, Republic of</option>
                <option value="Monaco" title="Monaco">Monaco</option>
                <option value="Mongolia" title="Mongolia">Mongolia</option>
                <option value="Montenegro" title="Montenegro">Montenegro</option>
                <option value="Montserrat" title="Montserrat">Montserrat</option>
                <option value="Morocco" title="Morocco">Morocco</option>
                <option value="Mozambique" title="Mozambique">Mozambique</option>
                <option value="Myanmar" title="Myanmar">Myanmar</option>
                <option value="Namibia" title="Namibia">Namibia</option>
                <option value="Nauru" title="Nauru">Nauru</option>
                <option value="Nepal" title="Nepal">Nepal</option>
                <option value="Netherlands" title="Netherlands">Netherlands</option>
                <option value="New Caledonia" title="New Caledonia">New Caledonia</option>
                <option value="New Zealand" title="New Zealand">New Zealand</option>
                <option value="Nicaragua" title="Nicaragua">Nicaragua</option>
                <option value="Niger" title="Niger">Niger</option>
                <option value="Nigeria" title="Nigeria">Nigeria</option>
                <option value="Niue" title="Niue">Niue</option>
                <option value="Norfolk Island" title="Norfolk Island">Norfolk Island</option>
                <option value="Northern Mariana Islands" title="Northern Mariana Islands">Northern Mariana Islands</option>
                <option value="Northern Cyprus" title="Northern Cyprus">Northern Cyprus</option>
                <option value="Norway" title="Norway">Norway</option>
                <option value="Oman" title="Oman">Oman</option>
                <option value="Pakistan" title="Pakistan">Pakistan</option>
                <option value="Palau" title="Palau">Palau</option>
                <option value="Palestinian Territory, Occupied" title="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                <option value="Panama" title="Panama">Panama</option>
                <option value="Papua New Guinea" title="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay" title="Paraguay">Paraguay</option>
                <option value="Peru" title="Peru">Peru</option>
                <option value="Philippines" title="Philippines">Philippines</option>
                <option value="Pitcairn" title="Pitcairn">Pitcairn</option>
                <option value="Poland" title="Poland">Poland</option>
                <option value="Portugal" title="Portugal">Portugal</option>
                <option value="Puerto Rico" title="Puerto Rico">Puerto Rico</option>
                <option value="Qatar" title="Qatar">Qatar</option>
                <option value="Réunion" title="Réunion">Réunion</option>
                <option value="Romania" title="Romania">Romania</option>
                <option value="Russian Federation" title="Russian Federation">Russian Federation</option>
                <option value="Rwanda" title="Rwanda">Rwanda</option>
                <option value="Saint Barthélemy" title="Saint Barthélemy">Saint Barthélemy</option>
                <option value="Saint Helena, Ascension and Tristan da Cunha" title="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option>
                <option value="Saint Kitts and Nevis" title="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                <option value="Saint Lucia" title="Saint Lucia">Saint Lucia</option>
                <option value="Saint Martin (French part)" title="Saint Martin (French part)">Saint Martin (French part)</option>
                <option value="Saint Pierre and Miquelon" title="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                <option value="Saint Vincent and the Grenadines" title="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                <option value="Samoa" title="Samoa">Samoa</option>
                <option value="San Marino" title="San Marino">San Marino</option>
                <option value="Sao Tome and Principe" title="Sao Tome and Principe">Sao Tome and Principe</option>
                <option value="Saudi Arabia" title="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal" title="Senegal">Senegal</option>
                <option value="Serbia" title="Serbia">Serbia</option>
                <option value="Seychelles" title="Seychelles">Seychelles</option>
                <option value="Sierra Leone" title="Sierra Leone">Sierra Leone</option>
                <option value="Singapore" title="Singapore">Singapore</option>
                <option value="Sint Maarten (Dutch part)" title="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
                <option value="Slovakia" title="Slovakia">Slovakia</option>
                <option value="Slovenia" title="Slovenia">Slovenia</option>
                <option value="Solomon Islands" title="Solomon Islands">Solomon Islands</option>
                <option value="Somalia" title="Somalia">Somalia</option>
                <option value="South Africa" title="South Africa">South Africa</option>
                <option value="South Georgia and the South Sandwich Islands" title="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                <option value="South Sudan" title="South Sudan">South Sudan</option>
                <option value="Spain" title="Spain">Spain</option>
                <option value="Sri Lanka" title="Sri Lanka">Sri Lanka</option>
                <option value="Sudan" title="Sudan">Sudan</option>
                <option value="Suriname" title="Suriname">Suriname</option>
                <option value="Svalbard and Jan Mayen" title="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                <option value="Swaziland" title="Swaziland">Swaziland</option>
                <option value="Sweden" title="Sweden">Sweden</option>
                <option value="Switzerland" title="Switzerland">Switzerland</option>
                <option value="Syrian Arab Republic" title="Syrian Arab Republic">Syrian Arab Republic</option>
                <option value="Taiwan, Province of China" title="Taiwan, Province of China">Taiwan, Province of China</option>
                <option value="Tajikistan" title="Tajikistan">Tajikistan</option>
                <option value="Tanzania, United Republic of" title="Tanzania, United Republic of">Tanzania, United Republic of</option>
                <option value="Thailand" title="Thailand">Thailand</option>
                <option value="Timor-Leste" title="Timor-Leste">Timor-Leste</option>
                <option value="Togo" title="Togo">Togo</option>
                <option value="Tokelau" title="Tokelau">Tokelau</option>
                <option value="Tonga" title="Tonga">Tonga</option>
                <option value="Trinidad and Tobago" title="Trinidad and Tobago">Trinidad and Tobago</option>
                <option value="Tunisia" title="Tunisia">Tunisia</option>
                <option value="Turkey" title="Turkey">Turkey</option>
                <option value="Turkmenistan" title="Turkmenistan">Turkmenistan</option>
                <option value="Turks and Caicos Islands" title="Turks and Caicos Islands">Turks and Caicos Islands</option>
                <option value="Tuvalu" title="Tuvalu">Tuvalu</option>
                <option value="Uganda" title="Uganda">Uganda</option>
                <option value="Ukraine" title="Ukraine">Ukraine</option>
                <option value="United Arab Emirates" title="United Arab Emirates">United Arab Emirates</option>
                <option value="United Kingdom" title="United Kingdom">United Kingdom</option>
                <option value="United States" title="United States">United States</option>
                <option value="United States Minor Outlying Islands" title="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                <option value="Uruguay" title="Uruguay">Uruguay</option>
                <option value="Uzbekistan" title="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu" title="Vanuatu">Vanuatu</option>
                <option value="Venezuela, Bolivarian Republic of" title="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic of</option>
                <option value="Viet Nam" title="Viet Nam">Viet Nam</option>
                <option value="Virgin Islands, British" title="Virgin Islands, British">Virgin Islands, British</option>
                <option value="Virgin Islands, U.S." title="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                <option value="Wallis and Futuna" title="Wallis and Futuna">Wallis and Futuna</option>
                <option value="Western Sahara" title="Western Sahara">Western Sahara</option>
                <option value="Yemen" title="Yemen">Yemen</option>
                <option value="Zambia" title="Zambia">Zambia</option>
                <option value="Zimbabwe" title="Zimbabwe">Zimbabwe</option>
                </select>
                </div>
                <button type="submit" class="btn btn-primary active">Create</button>
            </form>
        </div>
        <div class="col-sm-3">
            <center><h1 class="badge">New Country Creation</h1></center>
            <form class="form-inline" method="post" action="{{ url('Admin/CreateCountry') }}">
                <div class="form-group">
                    <input name="country" type="text" class="form-control" placeholder="Country Name">
                </div>
                <button type="submit" class="btn btn-primary active">Create</button>
            </form>
            <br>
            <center><h1 class="badge">New University Creation</h1></center>
            <form class="form" method="post" action="{{ url('Admin/CreateUniv') }}">
                <div class="form-group">
                    <select class="form-control" name="country" required="required" id="country">
                        <option value="">---------------- Select a country -----------------</option>
                        <?php
                        foreach(Country::find() as $ctr){
                                echo"<option>$ctr->country</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <input name="univ" type="text" class="form-control" placeholder="University Name" required="required">
                </div>
                <div class="form-group">
                    <input name="website" type="text" class="form-control" placeholder="University Website">
                </div>
                <div class="form-group">
                    <input name="address" type="text" class="form-control" placeholder="University Address">
                </div>
                <div class="form-group">
                    <input name="description" type="text" class="form-control" placeholder="University Description">
                </div>
                <button type="submit" class="btn btn-primary active">Save</button>
            </form>
        </div>
    </div>
</div>

<hr>
<div id="maindiv" class="container-fluid">
    <div class="row">
        <center><h1 class="badge">List of Universities</h1></center>
        <div class="col-xs-6 col-sm-12">
            <div id="content">
                <table class="table" id="table1" name="table1">
                    <thead class="bg-primary active">
                    <th>#</th>
                    <th>Country</th>
                    <th>University</th>
                    <th>Website</th>
                    <th>Address</th>
                    <th>Description</th>
                    <th>Action</th>
                    </thead>
                    <tbody>
                    <?php
                $finduniv = Univ::find();
                    if($finduniv){
                    $count = 0;
                    foreach($finduniv as $un){
                    $count++;
                    echo"
                    <tr>
                        <td class='bg-primary responsive'>$count</td>
                        <td>$un->country</td>
                        <td>$un->univ</td>
                        <td>$un->website</td>
                        <td>$un->address</td>
                        <td>$un->description</td>
                        <td class='btn btn-danger active'><a href='../Admin/DeleteUniv/$un->id'>Delete</a></td>
                    </tr>
                    ";
                    }
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row">
        <center><h1 class="badge">List of active Sub Agents</h1></center>
        <div class="col-xs-6 col-sm-12">
            <div id="content">
                <table class="table" id="table1" name="table1">
                    <thead class="bg-primary active">
                    <th>#</th>
                    <th>Code Agent</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Country</th>
                    <th>Action</th>
                    </thead>
                    <tbody>
                    <?php
                $findSub = Subagents::find("status = 'active'");
                    if($findSub){
                    $count = 0;
                    foreach($findSub as $sub){
                    $count++;
                    echo"
                    <tr>
                    <td class='bg-primary responsive'>$count</td>
                    <td>$sub->codeagent</td>
                    <td>$sub->fname</td>
                    <td>$sub->lname</td>
                    <td>$sub->email</td>
                    <td>$sub->status</td>
                    <td>$sub->country</td>
                    <td class='btn btn-danger active'><a href='../Admin/DeleteSubagent/$sub->codeagent'>Delete</a></td>
                    </tr>
                    ";
                    }
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<hr>