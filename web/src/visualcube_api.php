<?php

	// Import globals
	global
		$VERSION,
		$MAX_PZL_DIM,
		$ENABLE_COOKIES,
		$DEFAULTS;

	// XML definition
	$HTML_DEF = '<?xml version="1.0" encoding="iso-8859-1"?>'."\n".
		'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"'."\n".
		'   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">'."\n";

	$CUBE_CRIDER="http://cube.crider.co.uk/";
	
	// Start page render
	echo $HTML_DEF;
?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<title>VisualCube (v<?php echo $VERSION; ?>)</title>
		<meta name="description"        content="Rubiks cube visualiser"/>
		<meta name="keywords"           content="visualcube, visual cube, imagecube, image cube, cube vis, viscube, visual rubiks, imgcube, cube image, cube gif, cub png, cube jpeg"/>
		<meta name="resource-type"      content="document"/>
		<meta name="language"           content="English"/>
		<meta name="rating"             content="general"/>
		<meta name="robots"             content="all"/>
		<meta name="expires"            content="never"/>
		<meta name="revisit-after"      content="14 days"/>
		<meta name="distribution"       content="global"/>
		<meta name="author"             content="Conrad Rider"/>
		<meta name="copyright"          content="Copyright © 2009-2010 Conrad Rider"/>
		<meta http-equiv="Content-Type" content="text/html; iso-8859-1"/>
		<script type="text/javascript">
			//<![CDATA[
			function setCookie(cname, value){
				var days = 365;
				var date = new Date();
				date.setTime(date.getTime()+(days*24*60*60*1000));
				var expires = "; expires="+date.toGMTString();
				document.cookie = cname + "=" + value + expires + "; path=/";
			}
			//]]>
		</script>
		<style media="screen" type="text/css">
			@import url("screen.css");
			table{
				border-spacing:0px; 
				border-top:1px solid silver;
				border-left:1px solid silver;
				border-right:0;
				border-bottom:1px solid silver;
				background-color:#FAFAFA; 
				
			}
			th{
				background-color:#DDDDDD; 
				border-right:1px solid silver;
				text-align:center;
			}
			h2{
				margin-top:10px;
			}
			td{
				vertical-align:top;
				border-top:1px solid grey; 
				border-right: 1px solid silver;
				padding:10px;
			}
			em{
				font-style:normal;
				font-weight:bold;
			}
			#examples img{
				border:0;
				float:none;
			}
			#content_v{
				margin:10px 50px;
				text-align:left;
			}
			#header_v{
				margin:10px 50px;
				text-align:left;
				
			}
			#header_v img{
				float:right;
				border:none;
			}
			#cookie_list{
				width:250px;
			}
			#cookie_list li{
				margin-bottom:20px;
			}
			#cookie_list input{
				float:right;
				width:60px;
			}
		</style>
	</head>
	<body>
		<div id="header_v">
			<h1>VisualCube</h1>
			Generate custom Rubik's cube visualisations from your browser address bar.
			<br/><br/>
		</div>
		<div id="content_v">
			<h2>Instructions</h2>
			Simply point your browser to visualcube.php to create a cube image.<br/>
			A range of parameters can be set to customise the cube visualisation.<br/>
			Click the link below for an example:<br/><br/>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="visualcube.php?fmt=<?php echo $DEFAULTS['fmt']; ?>&size=150&amp;pzl=2&amp;alg=R2F2R2"><?php echo $_SERVER['HTTP_HOST']; ?>/visualcube.php?fmt=<?php echo $DEFAULTS['fmt']; ?>&size=150&amp;pzl=2&amp;alg=R2F2R2</a>
			<br/><br/><br/>
			<h2>Examples</h2>
			The following images were generated by VisualCube.
			<br/><br/>
			<div id="examples">
				<a href="visualcube.php?fmt=<?php echo $DEFAULTS['fmt']; ?>&amp;size=200&amp;alg=S2M2E2">
					<img src="visualcube_0.gif" alt="Example 0"/></a>
				<a href="visualcube.php?fmt=<?php echo $DEFAULTS['fmt']; ?>&amp;size=200&amp;view=plan&amp;case=RUR'U'R'U2RUR'UR2U2R'y2&amp;arw=U1U5,U5U1,U3U7,U7U3">
					<img src="visualcube_1.gif" alt="Example 1"/></a>
				<a href="visualcube.php?fmt=<?php echo $DEFAULTS['fmt']; ?>&amp;size=200&amp;co=30&amp;co=12&amp;fo=50">
					<img src="visualcube_2.gif" alt="Example 2"/></a>
				<a href="visualcube.php?fmt=<?php echo $DEFAULTS['fmt']; ?>&amp;size=200&amp;r=y45x34&amp;cc=n&amp;fo=100&amp;co=35&amp;fd=tototototttttttttttttofotfttdtodotdtttttttttttttobotbt">
					<img src="visualcube_3.gif" alt="Example3"/></a>
				<a href="visualcube.php?fmt=<?php echo $DEFAULTS['fmt']; ?>&amp;size=200&amp;pzl=7&amp;cc=grey&amp;r=z-15x-105&amp;sch=yyyyyy&amp;fc=ynyyynynnnynnnyyyyyyyyynnnyynyynyynnnyyynnynnnnny">
					<img src="visualcube_4.gif" alt="Example4"/></a>
			</div>
			Click each cube to see how it was generated..
			<br/><br/><br/>
			<h2>Features</h2>
			<ul>
				<li>Fully 3D cube visualisation</li>
				<li>Cube dimensions from 1x1x1 to NxNxN</li>
				<li>Algorithm support</li>
				<li>Complete orientation control</li>
				<li>Multiple image formats</li>
				<li>Custom image size</li>
				<li>Cube and facelet transparency</li>
				<li>Custom colour schemes</li>
				<li>Custom background colour</li>
				<li>Image caching for speedy access</li>
				<li>Cookie configurable variables</li>
			</ul>
			<br/>
			<h2>To Do</h2>
			<div>
				The following features/bug fixes are planned for the future (ordered by priority).
				<ul>
					<li>More special views added to the 'view' variable (permutation arrows for example)</li>
					<li>Visualisation of other puzzles inc square-1, megaminx and pyraminx</li>
				</ul>
				<br/><br/>
			</div>
			<h2>Source Code</h2>
			<div> The source code for this script is available under the GNU Lesser General Public License at
			<a href="https://github.com/Cride5/visualcube">github.com/Cride5/visualcube</a>.</div>
			<br/><br/>
			<h2>Parameters</h2>
			<table>
				<tr><th>Variable</th><th>Description</th><th>Value Range</th><th>Default</th><th>Comment</th></tr>
				<tr><td><em>.</em></td><td>script extension</td><td> .png | .gif | .jpg | .svg | .tiff | .ico </td><td>.<?php echo $DEFAULTS['fmt']; ?></td>
					<td>The extension used in the script url dictates the format of the image generated. For example:
					visiting <a href="visualcube.jpg">/visualcube.jpg</a>
					will create a jpeg image.</td></tr>
				<tr><td><em>fmt</em></td><td>Image Format</td><td> png | gif | jpg | svg | tiff | ico </td><td><?php echo $DEFAULTS['fmt']; ?></td>
					<td>Used as an alternative to using an image extension as above.</td></tr>
				<tr><td><em>pzl</em></td><td>Puzzle Type</td><td>1 to <?php echo $MAX_PZL_DIM; ?></td><td><?php echo $DEFAULTS['pzl']; ?></td>
					<td>Values from N=(1 to <?php echo $MAX_PZL_DIM; ?>) represent an NxNxN cube. Currently only regular cubes are modelled</td></tr>
				<tr><td><em>size</em></td><td>Size of generated image</td><td>0 to 1024</td><td><?php echo $DEFAULTS['size']; ?></td><td>
					Images produced are square, so size specifies both width and height of the final image in pixels.</td></tr>
				<tr><td><em>view</em></td><td>Special View</td><td>plan|trans</td><td><?php echo $DEFAULTS['view']; ?>&nbsp;</td>
					<td>The view parameter allows special views to facilitate interpretation of different case aspects.
					<br/><em>plan</em> rotates cube to expose U face, while showing the sides of the top layer<br/>
					<em>trans</em> sets the cube base colour to transparent, and hides any masked or undefined faces</td></tr>
				<tr><td><em>stage</em></td><td>Stage Mask</td><td> ( fl | f2l | ll | cll | ell | oll | ocll | oell | coll | ocell | wv |
					 vh | els | cls | cmll | cross | f2l_3 | f2l_2 | f2l_sm | f2l_1 | f2b | line | 2x2x2 | 2x2x3 )-?[xyz2']*
					 </td><td><?php echo $DEFAULTS['stage']; ?>&nbsp;</td>
					<td>Sets parts of the cube to be masked from being coloured. The stage identifier is optionally followed by a rotation algorithm. For example: <em>stage=cross-x2</em> would rotate the cross mask so that the cross appears on the U-layer rather than the D-layer</td></tr>
				<tr><td><em>r</em></td><td>Rotation Sequence</td><td>([xyz]-?[0-9][0-9]?[0-9]?)+</td><td><?php echo $DEFAULTS['r']; ?></td>
					<td>Each entry in the sequence is an axis (x, y or z), followed by the
					number of degrees to rotate in a clockwise direction. Negative values are permitted.
					Any number of rotations is possible.</td></tr>
				<tr><th colspan="5">State Definitions</th></tr>
				<tr><td><em>alg</em></td><td>Algorithm to apply</td><td>[UDLRFBudlrfbMESxyz'2 ]*</td><td><?php echo $DEFAULTS['alg']; ?>&nbsp;</td>
					<td>The system applies the algorithm to the cube and displays the resulting state.<br/><br/>
					<em>NOTE:</em> Currently unavailable for 4x4 cubes or above</td></tr>
				<tr><td><em>case</em></td><td>Algorithm to solve case</td><td>[UDLRFBudlrfbMESxyz'2 ]*</td><td><?php echo $DEFAULTS['case']; ?>&nbsp;</td>
					<td>The system displays the cube state which is solved by applying the algorithm
					(algorithm inverse).<br/><br/>
					<em>NOTE:</em> Currently unavailable for 4x4 cubes or above</td></tr>
				<tr><td><em>fd</em></td><td>Facelet Definition</td><td>[udlrfbnot]*</td>
					<td><?php echo $DEFAULTS['fd'] != '' ? insert_space($DEFAULTS['fd'], $DEFAULTS['pzl']) :
					'uuuuuuuuu rrrrrrrrr fffffffff ddddddddd lllllllll bbbbbbbbb'; ?></td>
					<td>Defines the cube state in terms of facelet positions.
					u stands for a 'U' facelet (and likewise with rfdlb).
					Defining a cube state using this method means the cube will be coloured
					according to the scheme defined by the <em>sch</em> variable.
					Three special characters are used to indicate the following:<br/>
					<em>n</em>: This is a blank face (coloured grey)<br/>
					<em>o</em>: This is an 'oriented' face (coloured silver)<br/>
					<em>t</em>: This is a transparent face, and will not appear on the cube
					</td></tr>
				<tr><td><em>fc</em></td><td>Facelet Colours</td><td>[ndlswyrobgmpt]*</td>
					<td><?php echo $DEFAULTS['fc'] != '' ? insert_space($DEFAULTS['fc'], $DEFAULTS['pzl']) :
					'yyyyyyyyy rrrrrrrrr bbbbbbbbb wwwwwwwww ooooooooo ggggggggg'; ?></td>
					<td>Defines the cube state in terms of facelet colours,
					as an alternative to using fd. fc
					takes precedence over fd if both are defined.<br/><br/>
					See the 'sch' variable below for an explanation of the colour codes.
					</td></tr>
				<tr><th colspan="5">Cube Style</th></tr>
				<tr><td><em>sch</em></td><td>Colour Scheme</td>
					<td>[ndlswyrobgmp]*6 <br/><br/>OR<br/><br/>
					Comma separated list containing 6x one of:<br/>
					black | dgrey | grey | silver | white | yellow | red | orange | blue
					| green | purple | pink | [0-9a-fA-F]*3 | [0-9a-fA-F]*6
					</td><td><?php echo $DEFAULTS['sch']; ?></td>
					<td>The order of the colours specified represent the faces in this order:<br/><br/>
					U R F D L B
					<br/><br/>The letters used in shorthand notation map to the generic
					face colours as follows: n=black (noir), d=dark grey, l=light grey,
					s=silver (lighter grey), w=white, y=yellow, r=red, o=orange, b=blue, g=green,
					m=purple (magenta), p=pink, t=transparent<br/><br/>
					Where longhand notation is used, 3 or 6-digit hex codes can be used to specify
					the exact colour. for example C80000 would be a dark red colour.
					</td></tr>
				<tr><td><em>bg</em></td><td>Background Colour of image</td><td>[ndlswyrobgmpt] <br/><br/>OR<br/><br/>
					black | dgrey | grey | silver | white | yellow | red | orange | blue
					| green | purple | pink | [0-9a-fA-F]*3 | [0-9a-fA-F]*6
					</td>
					<td><?php echo $DEFAULTS['bg']; ?></td><td>The value <em>t</em> represents transparent, and is only valid for png and gif images.</td></tr>
				<tr><td><em>cc</em></td><td>Cube Colour</td><td>see above</td><td><?php echo $DEFAULTS['cc']; ?></td><td>This is the cube's base colour.</td></tr>
				<tr><td><em>co</em></td><td>Cube Opacity</td><td>0 to 99</td><td><?php echo $DEFAULTS['co']; ?></td>
					<td>Setting this value causes the base cube to be transparent.
					It means facelets at the back of the cube will also be rendered.
					A value of 0 gives complete transparency.</td></tr>
				<tr><td><em>fo</em></td><td>Facelet Opacity</td><td>0 to 99</td><td><?php echo $DEFAULTS['fo']; ?></td>
					<td>Setting this value causes the facelets to be rendered with transparency.</td></tr>
				<tr><td><em>dist</em></td><td>Projection Distance</td><td>1 to 100</td><td><?php echo $DEFAULTS['dist']; ?></td>
					<td>Controls the distance of the cube from the perspective of the viewer.</td></tr>
				<tr><th colspan="5">Added Features</th></tr>
				<tr><td><em>arw</em></td><td>Arrow Definition</td>
					<td>Comma separated list in the form:<br/><br/>
						&lt;a_from&gt;&lt;a_to&gt;(&lt;a_via&gt;)?(-i[0-9+])?(-s[0-9+])?(-&lt;colour&gt;)?<br/><br/>
						Where &lt;a_x&gt; is: [URFDLB][0-9]+<br/><br/>
						And: &lt;colour&gt; is as defined in the 'sch' variable.</td>
					<td>-i10-s10</td>
					<td>Defines a list of arrows to be drawn on the cube.<br/><br/>
					Each arrow is defined with a minimum of two sticker identifiers to indicate
					where it should be drawn from and to. The optional third sticker identifier
					indicates which sticker it should pass through if a curved arrow is to be drawn.
					Arrows may be scaled so that they fall short, or past the centre of each facelet
					by specifying the <em>s</em> (scale) parameter after a dash.
					Where curved arrows are drawn the degree to which the arrow deviates from a straight
					path can be specified via the <em>i</em> (influence) parameter.
					Arrows may also optionally be assigned individual colours, by using a -
					followed by a colour code.
					<br/><br/>Example:&nbsp;&nbsp;&nbsp;arw=U0U2,U2U8,U8U0,R6R2R0-s8-i5-yellow
					<br/><br/>
					The above example draws 4 arrows. The first three use default colour and scale
					and point to stickers on the U-face. The fourth arrow 
					points from sticker #6 to sticker #2 on the R-face, and is curved
					so that it passes through sticker #0. The arrow is slightly shortened to 8/10
					of its full length, and the influence of the pass through sticker in generating
					the curve is set to 5/10.
					</td></tr>
				<tr><td><em>ac</em></td><td>Default Arrow Colour</td><td>[ndlswyrobgmp] <br/><br/>OR<br/><br/>
					black | dgrey | grey | silver | white | yellow | red | orange | blue
					| green | purple | pink | [0-9a-fA-F]*3 | [0-9a-fA-F]*6
					</td>
					<td>grey</td><td>Arrows will be this colour by default, unless overridden by a
					colour specified for each arrow in the arw variable.</td></tr>
			</table>
			<br/><br/><?php if($ENABLE_COOKIES){ ?>
			<h2>Cookie Configuration</h2>
			The desired values for cookie configurable variables can be set below. <br/>
			Refer to the table above for acceptable values.
			<ul id="cookie_list">
				<li><input type="text" value="<?php if(array_key_exists('vc_r', $_COOKIE)) echo $_COOKIE['vc_r']?>"
					onkeyup="setCookie('vc_r', this.value)"/>Rotation Sequence (r):</li>
				<li><input type="text" value="<?php if(array_key_exists('vc_sch', $_COOKIE)) echo $_COOKIE['vc_sch']?>"
					onkeyup="setCookie('vc_sch', this.value)"/>Colour Scheme (sch):</li>
				<li><input type="text" value="<?php if(array_key_exists('vc_bg', $_COOKIE)) echo $_COOKIE['vc_bg']?>"
					onkeyup="setCookie('vc_bg', this.value)"/>Background Colour (bg):</li>
				<li><input type="text" value="<?php if(array_key_exists('vc_cc', $_COOKIE)) echo $_COOKIE['vc_cc']?>"
					onkeyup="setCookie('vc_cc', this.value)"/>Cube Colour (cc):</li>
				<li><input type="text" value="<?php if(array_key_exists('vc_co', $_COOKIE)) echo $_COOKIE['vc_co']?>"
					onkeyup="setCookie('vc_co', this.value)"/>Cube Opacity (co):</li>
				<li><input type="text" value="<?php if(array_key_exists('vc_fo', $_COOKIE)) echo $_COOKIE['vc_fo']?>"
					onkeyup="setCookie('vc_fo', this.value)"/>Facelet Opacity (fo):</li>
				<li><input type="text" value="<?php if(array_key_exists('vc_dist', $_COOKIE)) echo $_COOKIE['vc_dist']?>"
					onkeyup="setCookie('vc_dist', this.value)"/>Projection Distance (dist):</li>
			</ul><?php } ?>
		</div>
		<div id="footer">
			Copyright &copy; 2010 <a href="http://www.crider.co.uk">Conrad Rider</a>.
			<br/>Cube images generated by VisualCube are free to copy and distribute
		</div>
	</body>
</html>
