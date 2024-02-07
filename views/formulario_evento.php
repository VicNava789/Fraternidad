<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nombre del evento<span class="required">:</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" id="first-name" required="required" class="form-control ">
        </div>
    </div>

    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Fecha<span class="required">:</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" id="last-name" name="last-name" required="required" class="form-control">
        </div>
    </div>


    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Contenido<span class="required">:</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <textarea class="form-control" name="contenido" id="contenido" cols="30" rows="10"></textarea>
            <!-- <input type="area" id="last-name" name="last-name" required="required"
									class="form-control"> -->
        </div>

    </div>

    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="imagen"></label>
        <div class="col-md-6 col-sm-6">
            <input type="file" id="imagen" name="img" size="20000">
        </div>
    </div>

    <div class="ln_solid"></div>
    
    <div class="item form-group">
        <div class="col-md-6 col-sm-6 offset-md-3">
            <!-- <button class="btn btn-primary" type="button">Cancel</button>
								<button class="btn btn-primary" type="reset">Reset</button> -->
            <button type="submit" class="btn btn-success">Crear evento</button>
        </div>
    </div>

</form>