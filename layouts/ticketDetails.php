<?=
"<div class=\"modal fade\" id=\"$id\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"$id\" aria-hidden=\"true\">
    <div class=\"modal-wrapper\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header bg-blue\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">x</button>
                    <h4 class=\"modal-title\"><i class=\"fa fa-code\">&nbsp;</i>$subject</h4>
                </div>
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <div class=\"col-md-2\">
                            <img src=\"img/avatar01.png\" class=\"img-circle\" alt=\"\" width=\"50\">
                        </div>
                        <div class=\"col-md-10\">
                            <p>Ticket <strong>#$id</strong> obert per <a href=\"#\">$author</a> el $time</p>
                            <p>$message</p>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> Tancar</button>
                </div>
            </div>
        </div>
    </div>
</div>"
?>