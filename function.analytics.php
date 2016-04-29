<?php
#CMS - CMS Made Simple
#(c)2004-2016 by Ted Kulp (ted@cmsmadesimple.org)
#This project's homepage is: http://cmsmadesimple.org
#
#This program is free software; you can redistribute it and/or modify
#it under the terms of the GNU General Public License as published by
#the Free Software Foundation; either version 2 of the License, or
#(at your option) any later version.
#
#This program is distributed in the hope that it will be useful,
#but WITHOUT ANY WARRANTY; without even the implied warranty of
#MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#GNU General Public License for more details.
#You should have received a copy of the GNU General Public License
#along with this program; if not, write to the Free Software
#Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

#Authors: D Baars (123 Hosting Service) and Jérôme Benoit (Piment Noir)

function smarty_cms_function_analytics($params, &$smarty)
{
	if(empty($params['id'])) {
		echo 'No google analytics User-ID tracker ID is been given, please insert the User-ID tracker ID as a parameter like {analytics id=""}.';
	}else{
		$id = $params['id'];
        }
?>

<script type="text/javascript">
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', '<?php echo $id; ?>', 'auto');
  ga('send', 'pageview');

</script>

<?php
}

function smarty_cms_help_function_analytics() {
	?>
	<h3>What does this do?</h3>
	<p>Adds the google analytics tracker code into the CMS.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page in the page body like: <code>{analytics id=""}</code> - Don't forget your User-ID google analytics tracker ID<br></p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(required)</em>id - User-ID google analytics tracker ID.</li>
	</ul>
	<?php
}

function smarty_cms_about_function_analytics() {
?>
	<p>Authors: D Baars d.baars@123hostingservice.nli and Jérôme Benoit jerome.benoit@piment-noir.org </p>
        <p>Version: 0.3 Updated js google analytics code to universal</p>
	<p>Version: 0.2 IE Bug fix </p>
	<p>Version: 0.1 (initial Release) Asynchronous Tracking method </p>
	<?php
}

?>
