<?php require_once(APPPATH . 'views/css-page.php'); ?>


<div class="col-xs-12">
    <h3> <?php echo $this->session->userdata('name'); ?>'s employment history</h3>
    <div class="page-content">
        <a href="javascript:void(0);" class="add_user" data-toggle="modal" data-target="#myModal"> <i class="fa fa-plus-square"></i> <span> New employment record</span> </a>

        <?php echo $this->session->flashdata('msg'); ?>
        <div class="row-fluid">
            <div class="span12 widget-container-span">
                <div class="widget-main ">
                    <div class="accordion-group">    <div class="accordion-body collapsed" id="collapseThree">
                            <div class="accordion-inner">
                                <div class="alert alert-info">Select a field to edit the content</div>                     

                                <table id="example1" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th class="center">
                                                <label>
                                                    <input type="checkbox" />
                                                    <span class="lbl"></span>
                                                </label>
                                            </th>
                                            <th>Organisation</th>
                                            <th>Position</th>
                                            <th>Country</th>   
                                            <th>Location</th>   
                                            <th>Sector</th>   
                                            <th>Contact</th>                                           
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th></th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        if (is_array($records) && count($records)) {
                                            foreach ($records as $loop) {
                                                $organisations = $loop->organisation;
                                                $positions = $loop->position;
                                                $countrys = $loop->country;
                                                $locations = $loop->location;
                                                $sectors = $loop->sector;
                                                $contacts = $loop->contact;
                                                $created = $loop->created;
                                                $startDates = $loop->startDate;
                                                $endDates = $loop->endDate;
                                                $id = $loop->id;
                                                ?>  

                                                <tr id="<?php echo $id; ?>" class="edit_tr">
                                                    <td class="center ">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lbl"></span>
                                                        </label>
                                                    </td>

                                                    <td class="edit_td">
                                                        <span id="organisations_<?php echo $id; ?>" class="text"><?php echo $organisations; ?></span>
                                                        <input type="text" value="<?php echo $organisations; ?>" class="editbox" id="organisations_input_<?php echo $id; ?>"
                                                    </td>
                                                    <td class="edit_td">
                                                        <span id="positions_<?php echo $id; ?>" class="text"><?php echo $positions; ?></span>
                                                        <input type="text" value="<?php echo $positions; ?>" class="editbox" id="positions_input_<?php echo $id; ?>"
                                                    </td>
                                                    <td class="edit_td">
                                                        <span id="countrys_<?php echo $id; ?>" class="text"><?php echo $countrys; ?></span>
        <!--                                                        <input type="text" value="<?php echo $region; ?>" class="editbox" id="region_input_<?php echo $id; ?>"-->

                                                        <select   name="countrys" class="editbox" id="countrys_input_<?php echo $id; ?>" >                                                            
                                                            <option value="<?php echo $countrys; ?>" title="<?php echo $countrys; ?>"><?php echo $countrys; ?></option>                                                          
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
                                                    </td>
                                                    <td class="edit_td">
                                                        <span id="locations_<?php echo $id; ?>" class="text"><?php echo $locations; ?></span>
                                                        <input type="text" value="<?php echo $locations; ?>" class="editbox" id="locations_input_<?php echo $id; ?>"
                                                    </td>
                                                    <td class="edit_td">
                                                        <span id="sectors_<?php echo $id; ?>" class="text"><?php echo $sectors; ?></span>
                                                        <input type="text" value="<?php echo $sectors; ?>" class="editbox" id="sectors_input_<?php echo $id; ?>"
                                                    </td>
                                                    <td class="edit_td">
                                                        <span id="contacts_<?php echo $id; ?>" class="text"><?php echo $contacts; ?></span>
                                                        <input type="number" value="<?php echo $contacts; ?>" class="editbox" id="contacts_input_<?php echo $id; ?>"
                                                    </td>



                                                    <td class="edit_td">

                                                        <span id="startDates_<?php echo $id; ?>" class="text"><?php echo $startDates; ?></span>
                                                        <input class="span10 date-picker editbox" id="startDates_input_<?php echo $id; ?>" value="<?php echo $startDates; ?>"   type="text" name="date" data-date-format="yyyy-mm-dd" />
                                                        <span class="add-on">
                                                            <i class="icon-calendar"></i>
                                                        </span>
                                                    </td>
                                                    <td class="edit_td">
                                                        <span id="endDates_<?php echo $id; ?>" class="text"><?php echo $endDates; ?></span>
                                                        <input class="span10 date-picker editbox" id="endDates_input_<?php echo $id; ?>" value="<?php echo $endDates; ?>"   type="text" name="date" data-date-format="yyyy-mm-dd" />
                                                        <span class="add-on">
                                                            <i class="icon-calendar"></i>
                                                        </span>                                                        
                                                    </td>

                                                    <td class="td-actions">

                                                        <a href="<?php echo base_url() . "index.php/student/employment/delete/" . $loop->id; ?>" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                            <span class="red">
                                                                <i class="icon-trash bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        ?>



                                    </tbody>
                                </table>  

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="modal fade  col-md-12" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">NEW EMPLOYMENT RECORD</h4>
            </div>

            <form  role= "form" id="station-form" name="station-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/student/employment'  method="post">            


                <div class="control-group form">
                    <div class="controls">
                        <div class="form-group">
                            <label>Organisation</label>                        
                            <input type="text" class="form-control" id="organisation" name="organisation" required  />

                        </div>

                        <div class="form-group">
                            <label>Position</label>
                            <input class="form-control" type="text" id="position" name="position"  />
                        </div>

                        <div class="form-group">
                            <label >Country of employment</label>
                            <select class="form-control" id="country" name="country" >                                                          

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

                        <div class="form-group">
                            <label>State/District/Region</label>
                            <input type="text" class="form-control" id="location" name="location"  />
                        </div>                       
                        <div class="form-group">
                            <label>Organisation /Firm Contact</label>  
                            <input required type="number" class="form-control"  id="contact" name="contact"   />
                        </div>

                        <div class="form-group"> 
                            <label>Organisation /Firm Email</label>  
                            <input required type="email" class="form-control"  id="email" name="email"   />
                        </div>                    

                        <div class="form-group">
                            <label>Sector</label>
                            <input class="easyui-combobox form-control" name="sector" id="sector" style="width:100%;height:26px"  data-options="
                                   url:'<?php echo base_url() ?>index.php/student/sectors',
                                   method:'get',
                                   valueField:'sector',
                                   textField:'sector',
                                   multiple:false,
                                   panelHeight:'auto'
                                   ">
                        </div>


                        <div class="form-group">
                            <label class="label-top">Start year of employment:</label>
                            <select name="startDate" class="form-control">
                                <?php
                                for ($i = 1950; $i < date('Y') + 1; $i++) {
                                    echo "<option>$i</option>";
                                }
                                ?>
                            </select>

                        </div>
                        <div class="form-group">
                            <label class="label-top">End year of employment:</label>
                            <select name="endDate" class="form-control">
                                <?php
                                for ($i = 1950; $i < date('Y') + 1; $i++) {
                                    echo "<option>$i</option>";
                                }
                                ?>
                            </select>
<!--                            <input name="endDate" id="endDate" class="easyui-datebox control-group" >
                        </div>-->

                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-info pull-right">Submit</button>
                        </div><!-- /.box-footer -->

                    </div>
                   
                </div>
            </form>	
        </div>
    </div>
</div>
    <!--<![endif]-->

    <!--[if IE]>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <![endif]-->

    <!--[if !IE]>-->

    <script type="text/javascript">
        window.jQuery || document.write("<script src='<?= base_url(); ?>assets/js/jquery-2.0.3.min.js'>" + "<" + "/script>");
    </script>

    <!--<![endif]-->

    <!--[if IE]>
    <script type="text/javascript">
    window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
    </script>
    <![endif]-->

    <script type="text/javascript">
        if ("ontouchend" in document)
            document.write("<script src='<?= base_url(); ?>assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
    </script>
    <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>

    <!--page specific plugin scripts-->

    <!--[if lte IE 8]>
      <script src="assets/js/excanvas.min.js"></script>
    <![endif]-->

    <script src="<?= base_url(); ?>assets/js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/jquery.ui.touch-punch.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/chosen.jquery.min.js"></script>

    <script src="<?= base_url(); ?>assets/js/date-time/bootstrap-datepicker.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/date-time/bootstrap-timepicker.min.js"></script>

    <script src="<?= base_url(); ?>assets/js/date-time/daterangepicker.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/bootstrap-colorpicker.min.js"></script>

    <script src="<?= base_url(); ?>assets/js/jquery.autosize-min.js"></script>
    <script src="<?= base_url(); ?>assets/js/ace-elements.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/ace.min.js"></script>

    <!--inline scripts related to this page-->


    <script type="text/javascript">
        $(document).ready(function ()
        {
            $(".editbox").hide();

            $(".edit_tr").click(function ()
            {
                var ID = $(this).attr('id');
                $("#organisations_" + ID).hide();
                $("#positions_" + ID).hide();
                $("#countrys_" + ID).hide();
                $("#locations_" + ID).hide();
                $("#sectors_" + ID).hide();
                $("#contacts_" + ID).hide();
                $("#startDates_" + ID).hide();
                $("#endDates_" + ID).hide();


                $("#organisations_input_" + ID).show();
                $("#positions_input_" + ID).show();
                $("#countrys_input_" + ID).show();
                $("#locations_input_" + ID).show();
                $("#sectors_input_" + ID).show();
                $("#contacts_input_" + ID).show();
                $("#startDates_input_" + ID).show();
                $("#endDates_input_" + ID).show();

            }).change(function ()
            {
                var ID = $(this).attr('id');
                var organisations = $("#organisations_input_" + ID).val();
                var positions = $("#positions_input_" + ID).val();
                var countrys = $("#countrys_input_" + ID).val();
                var locations = $("#locations_input_" + ID).val();
                var sectors = $("#sectors_input_" + ID).val();
                var contacts = $("#contacts_input_" + ID).val();
                var startDates = $("#startDates_input_" + ID).val();
                var endDates = $("#endDates_input_" + ID).val();

                var dataString = 'id=' + ID + '&organisation=' + organisations + '&position=' + positions + '&country=' + countrys + '&location=' + locations + '&sector=' + sectors + '&contact=' + contacts + '&startDate=' + startDates + '&endDate=' + endDates;
                $("#organisations_" + ID).html('<img src="<?= base_url(); ?>images/loading.gif" />'); // Loading image
                $("#positions_" + ID).html('<img src="<?= base_url(); ?>images/loading.gif" />'); // Loading image
                $("#countrys_" + ID).html('<img src="<?= base_url(); ?>images/loading.gif" />'); // Loading image
                $("#locations_" + ID).html('<img src="<?= base_url(); ?>images/loading.gif" />'); // Loading image
                $("#sectors_" + ID).html('<img src="<?= base_url(); ?>images/loading.gif" />'); // Loading image
                $("#contacts_" + ID).html('<img src="<?= base_url(); ?>images/loading.gif" />'); // Loading image
                $("#startDates_" + ID).html('<img src="<?= base_url(); ?>images/loading.gif" />'); // Loading image
                $("#endDates_" + ID).html('<img src="<?= base_url(); ?>images/loading.gif" />'); // Loading image

                if (organisations.length > 0 && contacts.length > 0)
                {

                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url() . "index.php/student/employment/update/"; ?>",
                        data: dataString,
                        cache: false,
                        success: function (html)
                        {
                            $("#organisations_" + ID).html(organisations);
                            $("#positions_" + ID).html(positions);
                            $("#countrys_" + ID).html(countrys);
                            $("#locations_" + ID).html(locations);
                            $("#sectors_" + ID).html(sectors);
                            $("#contacts_" + ID).html(contacts);
                            $("#startDates_" + ID).html(startDates);
                            $("#endDates_" + ID).html(endDates);

                        }
                    });
                } else
                {
                    alert('Enter something.');
                }
            });

            // Edit input box click action
            $(".editbox").mouseup(function ()
            {
                return false
            });

            // Outside click action
            $(document).mouseup(function ()
            {
                $(".editbox").hide();
                $(".text").show();
            });
            $('.date-picker').datepicker().next().on(ace.click_event, function () {
                $(this).prev().focus();
            });

        });
    </script>
    <?php require_once(APPPATH . 'views/js-page.php'); ?>
