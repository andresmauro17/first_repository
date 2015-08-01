<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Ajax Php Demo w/ Twitter Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="./css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="/css/bootstrap-responsive.css" rel="stylesheet">


  </head>

  <body>
  	 
    
   <a data-toggle="modal" href="#myModal" class="btn btn-success btn-large">Launch Modal Form</a>

   <!-- sample modal content -->
          <div id="myModal" class="modal hide fade">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h3>Modal Heading</h3>
            </div>
            <div class="modal-body">
              <p><strong>This form has not been wired up to post the changes to the php server side function to process the form</strong></p>
              <p>There is an empty function in place that will need to be completed to handle the form processing in a manner of
              your choosing.</p>
              <p>A couple of things that you will want to keep in mind:</p>
              <ul>
                <li>On success you may want to close the modal</li>
                <li>On error you will want to pass the error messages back to the modal without closing</li>
                <li>Considering providing both Save and Save & Close options for your users</li>
              </ul>
              <hr>

              <h4>Modal Form</h4>
        <!-- Modal Form Starts Here -->
          <form name="modalForm" id="modalForm">
            <input type="hidden" name="function" value="modalForm">
                  <fieldset>  
                    <div class="control-group">  
                      <label class="control-label" for="input1">Text input</label>  
                      <div class="controls">  
                        <input type="text" class="input-xlarge" id="input1" name="f1Input">    
                      </div>  
                    </div>  
                    <div class="control-group">  
                      <label class="control-label" for="select1">Select list</label>  
                      <div class="controls">  
                        <select id="select1" name="f1Select">  
                          <option>Please Select...</option>  
                          <option value="1">1</option>  
                          <option value="2">2</option>  
                          <option value="3">3</option>  
                          <option value="4">4</option>  
                        </select>  
                      </div>  
                    </div>  
                  </fieldset>  
          </form>
        <!-- Modal Form Ends Here -->
            </div>
            <div class="modal-footer">
              <a class="btn" data-dismiss="modal" >Close</a>
              <a id="modalFormSaveBtn" class="btn btn-success">Save changes</a>
            </div>
          </div>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./js/thirdparty/jquery.js"></script>
    <script src="./js/thirdparty/bootstrap-transition.js"></script> 
    <script src="./js/thirdparty/bootstrap-modal.js"></script>
    
  </body>
</html>
