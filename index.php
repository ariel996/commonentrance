<?php
/**
 * Created by PhpStorm.
 * User: Mantel Ltd
 * Date: 23/03/2017
 * Time: 19:05
 */
require "header.php";
?>
    <div class="jumbotron text-center">
        <div class="container">
            <h1> Welcome to HTTTC - ENSET Bambili Online Result Home Page </h1>
            <p class="lead">Higher Technical Teacher Training College<br /> </p>
            <p><button type="submit" class="btn btn-primary" id="oral">ORAL RESULT</button>
                <button class="btn btn-success" id="writing">WRITING RESULT</button>
            </p>

        </div>
    </div>

<?php  require 'panel.php'; ?>
<!-- Contact Modal -->
<div id="contact" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Contact Us</h4>
            </div>
            <div class="modal-body">
                <p>Administration Page :: Websmaster or Administrator contacts</p>
                <p class="text-info"><small>Our contacts</small></p>
                <p>Fax: (+237) 699 - 501 - 442</p>
                <p>Tel: (+237) 676 - 124 - 735</p>
                <p>E-mail: arieldeguilique@hotmail.com</p>
                <p>Website: www.ensetbambili.net</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>
<?php
require "footer.php";
?>