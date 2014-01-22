<form id="compile-less-form" class="form-horizontal">

<!-- Form Name -->
<div class="legend-aux">Compilar archivos de estilo</div>

<div class="container-fluid">
    <div class="span6 file-name">
    	<p>Nombre del archivo</p>
    </div>
    <div class="span1">
      <input type="checkbox" onclick="ckeck(this);" exclude="true"/>
    </div>
</div>

<div class="line" id="less-form-items"></div>

<div class="line"></div>

<div class="container-fluid ">
    <div class="span3">
    </div>
    <div class="span7 compile-all">
       <button type="button" onclick="compile_less_selected(this.form);" class="btn btn-primary btn-small">Compilar seleccionados</button> 
    </div>
</div>

</form>