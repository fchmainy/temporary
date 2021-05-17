 <HTML>
                <HEAD>
                        <title>Random Name Generator</title>
                        <script src="./vendor/jquery/jquery-3.2.1.min.js"></script>
			<script src="./js/script.js"></script> 
			<style>
				body {
 					height: 800px;
					text-align: center;
 					background: url('./images/background.jpeg');
 					color: white;
 					padding: 100px;
 					background-repeat: no-repeat;
        			}
			</style>
			<link rel="stylesheet" href="./css/style.css" />
                </HEAD>
                <BODY> 
                    <div id="adjective-popup">
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
                    <div id="animal-popup">
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
                    <div id="color-popup">
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
                    <div id="location-popup">
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


				if (! empty($POST["send"])) {
					if (! empty($_POST["adjective"])) {
						$adjective = filter_var($_POST["adjective"], FILTER_SANITIZE_STRING);
						$postURL='http://adjective.'.$NS.'/adjective';
						$postBODY["adjective"] = $adjective;
					}
					if (! empty($_POST["adjective"])) {
						$animal = filter_var($_POST["animal"], FILTER_SANITIZE_STRING);
                                                $postURL='http://animal.'.$NS.'/animal';
                                                $postBODY["animal"] = $animal;
					}
					if (! empty($_POST["color"])) {
						$color = filter_var($_POST["color"], FILTER_SANITIZE_STRING);
                                                $postURL='http://color.'.$NS.'/color';
                                                $postBODY["color"] = $color;
					}
					if (! empty($_POST["location"])) {
						$location = filter_var($_POST["location"], FILTER_SANITIZE_STRING);
                                                $postURL='http://location.'.$NS.'/location';
                                                $postBODY["location"] = $location;
					}
					$postCH = curl_init();
					curl_setopt($postCH, CURLOPT_RETURNTRANSFER, true);
                                	curl_setopt($postCH, CURLOPT_URL,$url);
                                	$res=curl_exec($postCH);
                                	curl_close($postCH);
					
					echo '<div id="success">Your new word as been successfully posted!</div>'
				}
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
