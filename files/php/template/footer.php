<hr>
<?php
echo "<span class='clarito'>&copy; Phenobook | Developed by Biotechnology and Genetic Resources - INTA Marcos Juárez</span>";

if(isset($__user)){
	$date = date("d/m/Y");
	$hour = date("G:i");
}
?>
</div>
</body>

<span id="top-link-block" class="hidden">
    <a href="#top" class="well well-sm"  onclick="$('html,body').animate({scrollTop:0},'slow');return false;">
        <i class="glyphicon glyphicon-chevron-up"></i>
    </a>
</span>

<script type="text/javascript" src="<?= __URL; ?>assets/libs/jquery-1.12.3.min.js"></script>

<script type="text/javascript" src="<?= __URL; ?>assets/libs/multiselect.min.js"></script>
<script type="text/javascript" src="<?= __URL; ?>assets/libs/pickdate/picker.js"></script>
<script type="text/javascript" src="<?= __URL; ?>assets/libs/pickdate/picker.date.js"></script>
<script type="text/javascript" src="<?= __URL; ?>assets/libs/pickdate/picker.time.js"></script>
<script type="text/javascript" src="<?= __URL; ?>assets/libs/pickdate/translations/es_ES.js"></script>

<script type="text/javascript" src="<?= __URL; ?>assets/libs/jquery.maskedinput.min.js"></script>

<script type="text/javascript" src="<?= __URL; ?>assets/libs/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= __URL ?>assets/libs/bootbox.min.js"></script>


<script type="text/javascript" src="<?= __URL ?>assets/libs/select2/js/select2.min.js"></script>

<script type="text/javascript" src="<?= __URL; ?>assets/libs/jquery-validation/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?= __URL; ?>assets/libs/jquery-validation/messages_es_AR.js"></script>
<script type="text/javascript" src="<?= __URL; ?>assets/libs/bootstrap-growl/jquery.bootstrap-growl.min.js"></script>

<script type="text/javascript" src="<?= __URL; ?>assets/js/defaults.js"></script>
<script type="text/javascript" src="<?= __URL; ?>assets/js/script.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-32702105-24', 'auto');
  ga('send', 'pageview');

</script>
</html>
