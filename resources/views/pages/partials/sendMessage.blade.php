<div class="modal fade" id="recruiter-listing-send-message" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #017BC6; text-align:center;">
                <button type="button" style="color:#FFF;" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 style="color:#FFF; font-weight:bold;" class="modal-title" id="exampleModalLabel">Send Message To : <input class="btn" type="text" style="font-weight:bold; font-size:16px;" id="recname" readonly></h4>
            </div>
            <form action="" method="post">
                <div class="modal-body">

                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Email ID:</label>
                        <input type="text" class="form-control" id="recipient-name" name="recipient-name" value="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label">Message:</label>
                        <textarea class="form-control" id="message-text" name="message-text"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="sub-text" class="control-label">Subject:</label>
                        <textarea class="form-control" id="sub-text" name="sub-text"></textarea>
                    </div>

                    <input type="hidden" id="recmail" name="recmail"/>
                </div>
                <div class="modal-footer">

                    <input type="submit" class="btn-blue btn bc" name="send_mail" value="Send message"/>
                </div>
            </form>
        </div>
    </div>
</div>
