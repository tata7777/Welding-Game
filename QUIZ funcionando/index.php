﻿

<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Quiz Da Soldagem">
    <meta name="keywords" content="">
    <meta name="author" content="Kauê Drigo & Felipe Chagas">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--<script src="https://kit.fontawesome.com/a076d05399.js"></script> -->
    <title>Welding Game</title>
    
    <link href="style/style.css" rel="stylesheet" />
</head>

<body>
    <!-- Título da página ou cabeçalho -->
    <div id="page-name">
        <h1>Discover your knowledge of welding!</h1>
    </div>

    <!--Caixa do Login-->
    <!--Tentar depois tirar a tag de style daqui e colocar no style.css-->
    <div class="box">
        <form action="testLogin.php" method="POST">
            <fieldset>
                <legend><b>Login</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="name" id="name" class="inputUser" required>
                    <label for="name" class="labelInput"><strong>Name</strong></label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="password" id="password" class="inputUser" required>
                    <label for="password" class="labelInput"><strong>Password</strong></label>
                </div>
                <br>
                <button type="submit" name="submit" id=enviar>Submit</button>
                <div class="sigup">
                    <br><strong>Don't have an account? </strong> <a href="registro.php">Sign Up</a>
                </div>
            </fieldset>
        </form>

        <style>
            body{
                font-family: Arial, Helvetica, sans-serif;
            }
            .box{
                position: absolute;
                top: 17%; /*posição do login na pagina*/
                left: 8%;
                background-color: gray;
                padding: 15px; /*distancia da borda pra fora*/
                border-radius: 15px; /*arredonda a borda*/
            }
            fieldset{
                border: 3px solid;
            }
            legend{
                border:1px solid;
                padding: 10px;
                text-align: center;
                background-color: white;
                border-radius: 8px;
            }
            .inputBox{
                position: relative;
            }
            .inputUser{
                font-size: 15px;
                width:98%;
                letter-spacing:2px;
                border-radius: 5px;
            }
            #country{
                border-radius: 5px;
                font-size: 15px;
            }
            .labelInput{
                position: absolute;
                top:-17px;
            }
            #enviar{
                background-color: white;
                padding: 10px;
                width:100%;
                border-radius: 10px;
                font-size: 15px;
                cursor:pointer;
            }
            #enviar:hover{
                background-color: beige;
            }
            .signup{  
                position: relative;
            }
            a{
                font-size: 15px;
                text-decoration: none;
                color: white;
            }
            a:hover{
                color:beige
            }
        </style>

    </div>

    <div id="folhaLouro">
    </div>

    <div id="firstImage">
    </div>

    <!-- Divisão que contém as imagens do quiz -->
    <div id="story-image">

        <iframe width="0" height="0" border="0" name="dummyframe" id="dummyframe"></iframe>
        <!--
        <form id="optionForm" target="dummyframe">
            <div id="option-box">
                <div style="width:100%">
                    <h3>Language</h3>
                    <input type="radio" id="pt" name="language" checked />
                    <label for="pt">Português</label>

                    <input type="radio" id="en" name="language" />
                    <label for="en">English</label>
                </div>

                <div style="width:100%">
                    <h3>Subject</h3>
                    <input type="checkbox" id="processos" name="subject" checked />
                    <label for="processos">Processes</label>

                    <input type="checkbox" id="materiais" name="subject" checked />
                    <label for="materiais">Materials</label>

                    <input type="checkbox" id="projeto" name="subject" checked />
                    <label for="projeto">Project</label>

                    <input type="checkbox" id="fabricacao" name="subject" checked />
                    <label for="fabricacao">Fabrication</label>
                </div>

                <div style="width:100%">
                    <h3>Name</h3>
                    <p id="nameError" >Nome não pode ser vazio</p>
                    <input style="width: 100%" type="text" id="studentName" name="studentName" />
                </div>

                <div style="width:100%">
                    <h3>Institution</h3>
                    <p id="universityError" >Instituição não pode ser vazio</p>
                    <input style="width: 100%" type="text" id="university" name="university" />
                </div>

                <div style="width:100%">
                    <h3>Country</h3>
                    <select id="country" name="country">
                        <option value="Brazil">Brazil</option>                        
                        <option value="Afghanistan">Afghanistan</option>
                        <option value="Åland Islands">Åland Islands</option>
                        <option value="Albania">Albania</option>
                        <option value="Algeria">Algeria</option>
                        <option value="American Samoa">American Samoa</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Angola">Angola</option>
                        <option value="Anguilla">Anguilla</option>
                        <option value="Antarctica">Antarctica</option>
                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Armenia">Armenia</option>
                        <option value="Aruba">Aruba</option>
                        <option value="Australia">Australia</option>
                        <option value="Austria">Austria</option>
                        <option value="Azerbaijan">Azerbaijan</option>
                        <option value="Bahamas">Bahamas</option>
                        <option value="Bahrain">Bahrain</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="Barbados">Barbados</option>
                        <option value="Belarus">Belarus</option>
                        <option value="Belgium">Belgium</option>
                        <option value="Belize">Belize</option>
                        <option value="Benin">Benin</option>
                        <option value="Bermuda">Bermuda</option>
                        <option value="Bhutan">Bhutan</option>
                        <option value="Bolivia">Bolivia</option>
                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                        <option value="Botswana">Botswana</option>
                        <option value="Bouvet Island">Bouvet Island</option>
                        <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                        <option value="Bulgaria">Bulgaria</option>
                        <option value="Burkina Faso">Burkina Faso</option>
                        <option value="Burundi">Burundi</option>
                        <option value="Cambodia">Cambodia</option>
                        <option value="Cameroon">Cameroon</option>
                        <option value="Canada">Canada</option>
                        <option value="Cape Verde">Cape Verde</option>
                        <option value="Cayman Islands">Cayman Islands</option>
                        <option value="Central African Republic">Central African Republic</option>
                        <option value="Chad">Chad</option>
                        <option value="Chile">Chile</option>
                        <option value="China">China</option>
                        <option value="Christmas Island">Christmas Island</option>
                        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Comoros">Comoros</option>
                        <option value="Congo">Congo</option>
                        <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                        <option value="Cook Islands">Cook Islands</option>
                        <option value="Costa Rica">Costa Rica</option>
                        <option value="Cote D'ivoire">Cote D'ivoire</option>
                        <option value="Croatia">Croatia</option>
                        <option value="Cuba">Cuba</option>
                        <option value="Cyprus">Cyprus</option>
                        <option value="Czechia">Czechia</option>
                        <option value="Denmark">Denmark</option>
                        <option value="Djibouti">Djibouti</option>
                        <option value="Dominica">Dominica</option>
                        <option value="Dominican Republic">Dominican Republic</option>
                        <option value="Ecuador">Ecuador</option>
                        <option value="Egypt">Egypt</option>
                        <option value="El Salvador">El Salvador</option>
                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                        <option value="Eritrea">Eritrea</option>
                        <option value="Estonia">Estonia</option>
                        <option value="Ethiopia">Ethiopia</option>
                        <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                        <option value="Faroe Islands">Faroe Islands</option>
                        <option value="Fiji">Fiji</option>
                        <option value="Finland">Finland</option>
                        <option value="France">France</option>
                        <option value="French Guiana">French Guiana</option>
                        <option value="French Polynesia">French Polynesia</option>
                        <option value="French Southern Territories">French Southern Territories</option>
                        <option value="Gabon">Gabon</option>
                        <option value="Gambia">Gambia</option>
                        <option value="Georgia">Georgia</option>
                        <option value="Germany">Germany</option>
                        <option value="Ghana">Ghana</option>
                        <option value="Gibraltar">Gibraltar</option>
                        <option value="Greece">Greece</option>
                        <option value="Greenland">Greenland</option>
                        <option value="Grenada">Grenada</option>
                        <option value="Guadeloupe">Guadeloupe</option>
                        <option value="Guam">Guam</option>
                        <option value="Guatemala">Guatemala</option>
                        <option value="Guernsey">Guernsey</option>
                        <option value="Guinea">Guinea</option>
                        <option value="Guinea-bissau">Guinea-bissau</option>
                        <option value="Guyana">Guyana</option>
                        <option value="Haiti">Haiti</option>
                        <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                        <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                        <option value="Honduras">Honduras</option>
                        <option value="Hong Kong">Hong Kong</option>
                        <option value="Hungary">Hungary</option>
                        <option value="Iceland">Iceland</option>
                        <option value="India">India</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                        <option value="Iraq">Iraq</option>
                        <option value="Ireland">Ireland</option>
                        <option value="Isle of Man">Isle of Man</option>
                        <option value="Israel">Israel</option>
                        <option value="Italy">Italy</option>
                        <option value="Jamaica">Jamaica</option>
                        <option value="Japan">Japan</option>
                        <option value="Jersey">Jersey</option>
                        <option value="Jordan">Jordan</option>
                        <option value="Kazakhstan">Kazakhstan</option>
                        <option value="Kenya">Kenya</option>
                        <option value="Kiribati">Kiribati</option>
                        <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                        <option value="Korea, Republic of">Korea, Republic of</option>
                        <option value="Kuwait">Kuwait</option>
                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                        <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                        <option value="Latvia">Latvia</option>
                        <option value="Lebanon">Lebanon</option>
                        <option value="Lesotho">Lesotho</option>
                        <option value="Liberia">Liberia</option>
                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                        <option value="Liechtenstein">Liechtenstein</option>
                        <option value="Lithuania">Lithuania</option>
                        <option value="Luxembourg">Luxembourg</option>
                        <option value="Macao">Macao</option>
                        <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                        <option value="Madagascar">Madagascar</option>
                        <option value="Malawi">Malawi</option>
                        <option value="Malaysia">Malaysia</option>
                        <option value="Maldives">Maldives</option>
                        <option value="Mali">Mali</option>
                        <option value="Malta">Malta</option>
                        <option value="Marshall Islands">Marshall Islands</option>
                        <option value="Martinique">Martinique</option>
                        <option value="Mauritania">Mauritania</option>
                        <option value="Mauritius">Mauritius</option>
                        <option value="Mayotte">Mayotte</option>
                        <option value="Mexico">Mexico</option>
                        <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                        <option value="Moldova, Republic of">Moldova, Republic of</option>
                        <option value="Monaco">Monaco</option>
                        <option value="Mongolia">Mongolia</option>
                        <option value="Montenegro">Montenegro</option>
                        <option value="Montserrat">Montserrat</option>
                        <option value="Morocco">Morocco</option>
                        <option value="Mozambique">Mozambique</option>
                        <option value="Myanmar">Myanmar</option>
                        <option value="Namibia">Namibia</option>
                        <option value="Nauru">Nauru</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Netherlands">Netherlands</option>
                        <option value="Netherlands Antilles">Netherlands Antilles</option>
                        <option value="New Caledonia">New Caledonia</option>
                        <option value="New Zealand">New Zealand</option>
                        <option value="Nicaragua">Nicaragua</option>
                        <option value="Niger">Niger</option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="Niue">Niue</option>
                        <option value="Norfolk Island">Norfolk Island</option>
                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                        <option value="Norway">Norway</option>
                        <option value="Oman">Oman</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="Palau">Palau</option>
                        <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                        <option value="Panama">Panama</option>
                        <option value="Papua New Guinea">Papua New Guinea</option>
                        <option value="Paraguay">Paraguay</option>
                        <option value="Peru">Peru</option>
                        <option value="Philippines">Philippines</option>
                        <option value="Pitcairn">Pitcairn</option>
                        <option value="Poland">Poland</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Puerto Rico">Puerto Rico</option>
                        <option value="Qatar">Qatar</option>
                        <option value="Reunion">Reunion</option>
                        <option value="Romania">Romania</option>
                        <option value="Russian Federation">Russian Federation</option>
                        <option value="Rwanda">Rwanda</option>
                        <option value="Saint Helena">Saint Helena</option>
                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                        <option value="Saint Lucia">Saint Lucia</option>
                        <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                        <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                        <option value="Samoa">Samoa</option>
                        <option value="San Marino">San Marino</option>
                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                        <option value="Saudi Arabia">Saudi Arabia</option>
                        <option value="Senegal">Senegal</option>
                        <option value="Serbia">Serbia</option>
                        <option value="Seychelles">Seychelles</option>
                        <option value="Sierra Leone">Sierra Leone</option>
                        <option value="Singapore">Singapore</option>
                        <option value="Slovakia">Slovakia</option>
                        <option value="Slovenia">Slovenia</option>
                        <option value="Solomon Islands">Solomon Islands</option>
                        <option value="Somalia">Somalia</option>
                        <option value="South Africa">South Africa</option>
                        <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                        <option value="Spain">Spain</option>
                        <option value="Sri Lanka">Sri Lanka</option>
                        <option value="Sudan">Sudan</option>
                        <option value="Suriname">Suriname</option>
                        <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                        <option value="Swaziland">Swaziland</option>
                        <option value="Sweden">Sweden</option>
                        <option value="Switzerland">Switzerland</option>
                        <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                        <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                        <option value="Tajikistan">Tajikistan</option>
                        <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                        <option value="Thailand">Thailand</option>
                        <option value="Timor-leste">Timor-leste</option>
                        <option value="Togo">Togo</option>
                        <option value="Tokelau">Tokelau</option>
                        <option value="Tonga">Tonga</option>
                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                        <option value="Tunisia">Tunisia</option>
                        <option value="Turkey">Turkey</option>
                        <option value="Turkmenistan">Turkmenistan</option>
                        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                        <option value="Tuvalu">Tuvalu</option>
                        <option value="Uganda">Uganda</option>
                        <option value="Ukraine">Ukraine</option>
                        <option value="United Arab Emirates">United Arab Emirates</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="United States">United States</option>
                        <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                        <option value="Uruguay">Uruguay</option>
                        <option value="Uzbekistan">Uzbekistan</option>
                        <option value="Vanuatu">Vanuatu</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Viet Nam">Viet Nam</option>
                        <option value="Virgin Islands, British">Virgin Islands, British</option>
                        <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                        <option value="Wallis and Futuna">Wallis and Futuna</option>
                        <option value="Western Sahara">Western Sahara</option>
                        <option value="Yemen">Yemen</option>
                        <option value="Zambia">Zambia</option>
                        <option value="Zimbabwe">Zimbabwe</option>
                    </select>
                        
                </div>
            </div>
        </form>
    -->

    
        <!-- Botão para iniciar o quiz COM contador de tempo -->
        <!--  
          <button id="consumivel" onclick="startCons()">TIMER 60s (ER)</button>
        <br /> -->
        <!-- Botão para iniciar o quiz SEM contador de tempo -->
        <!--  <button id="nao-consumivel" onclick="startNaoCons()">NO TIMER (TIG)</button>
        <br />
        -->

        <!-- botao HELP -->
        <div class="center">
            <input type="checkbox" id="click">
            <label for="click" class="click-me">Help</label>
            <div class="content">
              <div class="header">
                <h2>Help</h2>
                <label for="click" class="fas fa-times"></label>
              </div>
              <div class="text">
             <!-- <label for="click" class="fas fa-check"></label> -->
              <p>INSTRUCTIONS<br><br>The game contains questions about welding in different difficulty levels, accessed progressively
                as the player gets the quiz questions right. There are a total of 20 questions, with 4 alternatives of
                answer each, but only one of them is correct. Any wrong answer ends the game.<br><br>Choose an alternative, and press ENTER to confirm the answer.<br><br>TIME 60s (ER: COATED ELECTRODE): Player has 60 seconds to respond
                each question. If the time runs out, the game is ended, characterizing the player's defeat.<br><br>
                UNLIMITED TIME (TIG): The time available to answer each question is unlimited.
                Ideal game mode for studying.</p>
               </div>
              <div class="line"></div>
              <label for="click" class="close-btn">Close</label>
            </div> 
          </div>
        
        <!--Botão Feedback-->
        <div class="center2">
            <input type="checkbox" id="click2">
            <label for="click2" class="click-me2">Feedback</label>
            <div class="content2">
              <div class="header2">
                <h2>Feedback</h2>
                <label for="click2" class="fas fa-times"></label>
              </div>
             <!-- <label for="click" class="fas fa-check"></label> -->
             <div class="text-feed">
                 <p>If you have any problem, question or sugestion, feel free to contact us in:<br><br>welding.game@gmail.com.</p>
            </div>
              <div class="line2"></div>
              <label for="click2" class="close-btn2">Close</label>
            </div> 
          </div>
        
        


        <!-- Instruções do jogo -->
        <div id="help-text">
            <h2>INSTRUÇÕES</h2>

            <p>&nbsp &nbsp &nbsp &nbsp O jogo contém perguntas sobre soldagem em diversos níveis de dificuldade, acessados progressivamente
            à medida que o jogador acerta as perguntas do quiz. No total são 20 perguntas, com 4 alternativas de
            resposta cada, mas apenas uma delas está correta. Qualquer resposta errada finaliza o jogo.</p>

            <p>&nbsp &nbsp &nbsp &nbsp Escolha uma alternativa, e pressione ENTER para confirmar a resposta.</p>
            
            <p>&nbsp &nbsp &nbsp &nbsp TEMPO 60s (ER: ELETRODO REVESTIDO): O jogador tem 60 segundos para responder
            cada pergunta. Caso o tempo se esgote, o jogo é finalizado, caracterizando derrota do jogador.</p>
            
            <p>&nbsp &nbsp &nbsp &nbsp TEMPO ILIMITADO (TIG): O tempo disponível para responder cada pergunta é ilimitado.
            Modo de jogo ideal para estudar.</p>            
        </div>

        <!-- Personagem soldador -->
        <div id="welder">
        </div>

        <!-- Personagem Darth Vader -->
        <div id="darth-vader">
        </div>
        
        <!-- Tempo restante para responder a pergunta, se houver -->
        <div id="time">
        </div>

        <!-- Animação do tempo restante para responder a pergunta -->
        <div id="time-animation">
        </div>

        <!-- Animação na ponta da tocha/eletrodo -->
        <div id="spark">
        </div>

        <!-- Nome dos níveis -->
        <div id="levels">
            <div id="level_1">
            </div>

            <div id="level_2">
            </div>

            <div id="level_3">
                
            </div>

            <div id="level_4">
            </div>
        </div>

        <!-- Balão de fala do Darth Vader -->
        <div id="dv-speech">
        </div>

        <!-- Balão de fala do Soldador -->
        <div id="welder-speech">
        </div>

    </div>

    <!-- Área de comando do jogador -->
    <div id="quiz-container">
        <!-- Região das perguntas -->
        <div id="quiz-questions">
        </div>

        <!-- Região das respostas -->
        <div id="quiz-answers">
        </div>

        <div id="credits2">
            Kauê Oliveira Drigo, Dr Vladimir Ponomarov, Felipe Chagas Rodrigues de Souza
        </div>
    </div>
     
    <!-- Créditos -->
    <div id="credits">
        <br />
        <br />
        <div id="location">
            BRAZIL, UBERLANDIA - MG
        </div>
        <div id="c-image1"></div>
        <div id="c-image2"></div>
        <div id="c-image3"></div>
    </div>



    <!-- CARREGAMENTO DOS SCRIPTS -->
    <script src="js/script.js"></script>
    <script src="js/time_move.js"></script>
    <script src="js/question_random.js"></script>
    <script src="js/question_current.js"></script>
    <script src="js/move_characters.js"></script>
    <script src="js/speeches.js"></script>
    <script src="js/finish.js"></script>
    <script src="js/level_name.js"></script>

    <script src="js/level.js"></script>
    <script src="js/questions/questions1.js"></script>
    <script src="js/questions/questions1en.js"></script>
    <script src="js/questions/questions2.js"></script>
    <script src="js/questions/questions2en.js"></script>
    <script src="js/questions/questions3.js"></script>
    <script src="js/questions/questions3en.js"></script>
    <script src="js/questions/questions4.js"></script>
    <script src="js/questions/questions4en.js"></script>
    <script src="js/questions/questions5.js"></script>
    <script src="js/questions/questions5en.js"></script>
    <script src="js/questions/questions6.js"></script>
    <script src="js/questions/questions6en.js"></script>
    <script src="js/questions/questions7.js"></script>
    <script src="js/questions/questions7en.js"></script>
    <script src="js/questions/questions8.js"></script>
    <script src="js/questions/questions8en.js"></script>
    <script src="js/questions/questions9.js"></script>
    <script src="js/questions/questions9en.js"></script>
    <script src="js/questions/questions10.js"></script>
    <script src="js/questions/questions10en.js"></script>
    <script src="js/questions/questions11.js"></script>
    <script src="js/questions/questions11en.js"></script>
    <script src="js/questions/questions12.js"></script>
    <script src="js/questions/questions12en.js"></script>
    <script src="js/questions/questions13.js"></script>
    <script src="js/questions/questions13en.js"></script>
    <script src="js/questions/questions14.js"></script>
    <script src="js/questions/questions14en.js"></script>
    <script src="js/questions/questions15.js"></script>
    <script src="js/questions/questions15en.js"></script>
    <script src="js/questions/questions16.js"></script>
    <script src="js/questions/questions16en.js"></script>
    <script src="js/questions/questions17.js"></script>
    <script src="js/questions/questions17en.js"></script>
    <script src="js/questions/questions18.js"></script>
    <script src="js/questions/questions18en.js"></script>
    <script src="js/questions/questions19.js"></script>
    <script src="js/questions/questions19en.js"></script>
    <script src="js/questions/questions20.js"></script>
    <script src="js/questions/questions20en.js"></script>
</body>

</html>