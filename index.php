<?php
    date_default_timezone_set('Europe/Madrid');
    //TODO #1: INCLOURE LLIBRERIA AMB FUNCIONS AUXILIARS (carpeta lib)
    //TODO #2: RECUPERAR ELS TICKETS DESATS A LA COOKIE
    //TODO #3: SI REBEM UN NOU TICKET, AFEGIR-LO ALS TICKETS RECUPERATS, ASSIGNANT-LI UN NOU ID I DATAHORA ACTUALS
    //TODO #4: DESAR ELS TICKETS ACTUALS A LA COOKIE
    //TODO #5: REVISAR HTML AMB LA RESTA DE TODOs
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <title>Examen Parcial PHP - Curs 2022/23</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/support.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="col-md-12">
            <div class="grid support">
                <div class="grid-body">
                    <h1 class="center">Eina de Ticketing</h1>
                    <!-- AFEGEIX EL TEU NOM -->
                    <h3>by XXXX XXXXX</h3>
                </div>
            </div>
        </div>
        <section class="content">
            <!-- INICI NAVEGACIÓ -->
            <?php 
                //TODO #6: ACTUALITZAR COMPTADORS DE TICKETS I CATEGORIES AMB ELS VALORS CORRESPONENTS (ARA ESTAN HARDCODED a 0)
            ?>
            <div class="col-md-3">
                <div class="grid support">
                    <div class="grid-body">
                        <h2>Navega</h2>
                        <hr>
                        <ul>
                            <li class="active"><a href="#">Tickets Públics<span class="pull-right">0</span></a></li>
                        </ul>
                        <hr>
                        <p><strong>Categories</strong></p>
                        <ul class="support-label">
                            <li><a href="#"><span class="bg-red">&nbsp;</span>&nbsp;&nbsp;&nbsp;Error<span class="pull-right">0</span></a></li>
                            <li><a href="#"><span class="bg-green">&nbsp;</span>&nbsp;&nbsp;&nbsp;Millora<span class="pull-right">0</span></a></li>
                            <li><a href="#"><span class="bg-orange">&nbsp;</span>&nbsp;&nbsp;&nbsp;Preventiu<span class="pull-right">0</span></a></li>
                            <li><a href="#"><span class="bg-blue">&nbsp;</span>&nbsp;&nbsp;&nbsp;Informatiu<span class="pull-right">0</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- FI NAVEGACIÓ -->

            <!-- INICI APARTAT TICKETING -->
            <div class="col-md-9">
                <div class="grid support-content">
                    <div class="grid-body">
                        <?php 
                            //TODO #7: ACTUALITZAR COMPTADOR DE TICKETS OBERTS AMB EL VALOR QUE CORRESPONGUI (ARA ESTÀ HARDCODED a 0)
                        ?>
                        <h2>Tickets</h2>
                        <hr>
                        <div class="btn-group">
                            <button type="button" class="disabled btn btn-default active">0 Oberts</button>
                            <button type="button" class="disabled btn btn-default">0 Tancats</button>
                        </div>
                        
                        <!-- INICI NOU TICKET (INCLOU MODAL AMB FORMULARI) -->
                        <button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#newIssue">Nou Ticket</button>
                        <div class="modal fade" id="newIssue" tabindex="-1" role="dialog" aria-labelledby="newIssue" aria-hidden="true">
                            <div class="modal-wrapper">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header bg-blue">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                                            <h4 class="modal-title"><i class="fa fa-pencil"></i> Crear Nou Ticket</h4>
                                        </div>
                                        <form method="POST">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <select name="category" class="form-control">
                                                        <option value="bug">Error</option>
                                                        <option value="feature">Millora</option>
                                                        <option value="ap">Acció Preventiva</option>
                                                        <option value="info" selected>Informació</option>                        
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <input name="subject" type="text" class="form-control" placeholder="Assumpte">
                                                </div>
                                                <div class="form-group">
                                                    <input name="author" type="text" class="form-control" placeholder="Autor">
                                                </div>
                                                <div class="form-group">
                                                    <textarea name="message" class="form-control" placeholder="Detalla el teu problema o el motiu de la teva consulta" style="height: 120px;"></textarea>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel·lar</button>
                                                <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-pencil"></i> Crear</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                       <!-- FI NOU TICKET (INCLOU MODAL AMB FORMULARI) -->

                        <div class="padding"></div>
                        <div class="row">
                            <!-- INICI CONTINGUT TICKETS -->
                            <div class="col-md-12">
                                <!-- INICI LLISTA RESUMIDA DE TICKETS -->
                                <ul class="list-group fa-padding">
                                <?php 
                                    //TODO #8: UTILITZAR EL LAYOUT DE TICKETSUMMARY PER GENERAR EL LLISTAT DE TICKETS RESUMIT
                                    include('layouts/ticketSummary.php');
                                
                                ?>
                                </ul>
                                <!-- FI LLISTA RESUMIDA DE TICKETS -->
                                <!-- INICI MODALS AMB DETALL DE TICKETS -->
                                <?php
                                    //TODO #9: UTILITZAR EL LAYOUT DE TICKETDETAILS PER GENERAR LES FINESTRES MODAL DE DETALLS DELS TICKETS GENERATS PRÈVIAMENT
                                    include('layouts/ticketDetails.php');
                                ?>
                                <!-- FI MODALS AMB DETALL DE TICKETS -->
                            </div>
                            <!-- FI CONTINGUT TICKETS -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- FI APARTAT TICKETING -->
        </section>
    </div>
</body>
</html>