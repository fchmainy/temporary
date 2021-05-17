 <HTML>
        <body style="background-color:black;">
                <HEAD>
                        <title>Random Name Generator</title>
                        <style>
                                body {
                                background-image: url("./images/background.jpeg");
                                }
                        </style>
                        <style type="text/css">
                        body {
                                position: relative;
                                height: 100vh;
                                margin: 0;
                                }

                        h1 {
                                position: absolute;
                                text-align: center;
                                top: 65%;
                                left: 50%;
                                margin-right: -50%;
                                transform: translate(-50%);
                                border-radius: 15px 50px;
                                background: linear-gradient(to top left, DimGray, transparent 95%);
                                padding: 15px;
                                width: 700px;
                                height: 50px;
                                justify-content: center;
                        </style>
                        <script src="./vendor/jquery/jquery-3.2.1.min.js"></script>
			<script src="./js/script.js"></script> 
			<link rel="stylesheet" href="./css/style.css" />
                </HEAD>
                <BODY>
                    <div id="word-popup">
                        <form class="word-form" action="" id="adjective-form" method="post" enctype="multipart/form-data">
                            <h2>Add an adjective</h2>
                            <div>
                                <div>
                                    <label>Adjective: </label><span id="adjective-info" class="info"></span>
                                </div>
                                <div>
                                    <input type="text" id="adjective" name="adjective" class="inputBox" />
                                </div>
                            </div>
                            <div>
                                <input type="submit" id="send" name="send" value="Send" />
                            </div>
                        </form>
                    </div>
                    <div id="word-popup">
                        <form class="word-form" action="" id="animal-form" method="post" enctype="multipart/form-data">
                            <h2>Add an animal</h2>
                            <div>
                                <div>
                                    <label>Animal: </label><span id="animal-info" class="info"></span>
                                </div>
                                <div>
                                    <input type="text" id="animal" name="animal" class="inputBox" />
                                </div>
                            </div>
                            <div>
                                <input type="submit" id="send" name="send" value="Send" />
                            </div>
                        </form>
                    </div>
                    <div id="word-popup">
                        <form class="word-form" action="" id="color-form" method="post" enctype="multipart/form-data">
                            <h2>Add an color</h2>
                            <div>
                                <div>
                                    <label>Color: </label><span id="color-info" class="info"></span>
                                </div>
                                <div>
                                    <input type="text" id="color" name="color" class="inputBox" />
                                </div>
                            </div>
                            <div>
                                <input type="submit" id="send" name="send" value="Send" />
                            </div>
                        </form>
                    </div>
                    <div id="word-popup">
                        <form class="word-form" action="" id="location-form" method="post" enctype="multipart/form-data">
                            <h2>Add a location</h2>
                            <div>
                                <div>
                                    <label>Location: </label><span id="location-info" class="info"></span>
                                </div>
                                <div>
                                    <input type="text" id="location" name="location" class="inputBox" />
                                </div>
                            </div>
                            <div>
                                <input type="submit" id="send" name="send" value="Send" />
                            </div>
                        </form>
                    </div>

                    <table style="height: 72px;" width="498">
                                <tbody>
                                <tr>
                                <td style="width: 158px;"><img src="./images/shape.png" alt="" /></td>
                                <td style="width: 159px;"><img src="./images/f5nginx.png" alt="" /></td>
                                <td style="width: 159px;"><img src="./images/volterra.png" alt="" /></td>
                                </tr>
                                </tbody>
                    </table>
                    
                    <table class="center" style="height: 72px;" width="498">
                    <tbody>
                                <tr>
                    <?php
                                $NS = getenv('NAMESPACE');
                                $url='http://generator.'.$NS.'/name';
                                $ch = curl_init();
                                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                                curl_setopt($ch, CURLOPT_URL,$url);
                                $result=curl_exec($ch);
                                curl_close($ch);
                                $generated_name=json_decode($result, true);
                                #echo '<td>';    
                                echo '<td><div style="font-family:Courier; color:green;">kind</div></td>';
                                echo '<td><div style="font-family:Courier; color:green;">leopard of the </div></td>';
                                echo '<td><div style="font-family:Courier; color:green;">yellow</div></td>';
                                echo '<td><div style="font-family:Courier; color:green;">valley</div></td>';



                    ?>
                                </tr>
                                <tr>
                                <td><div id="plus-adjective-icon"><img src="./icon/plus.png" width="50" height="50" alt="" /></div></td>
                                <td><div id="plus-animal-icon"><img src="./icon/plus.png" width="50" height="50" alt="" /></div></td>
                                <td><div id="plus-color-icon"><img src="./icon/plus.png" width="50" height="50" alt="" /></div></td>
                                <td><div id="plus-location-icon"><img src="./icon/plus.png" width="50" height="50" alt="Add a location to the API" /></div></td>
                                </tr>
                    </tbody>
                    </table>
            	</BODY>
</HTML>
