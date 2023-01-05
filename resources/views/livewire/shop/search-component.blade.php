<div class="container-fluid">    
        <form class="d-flex" action="{{route('product.index')}}" method="get">
            <div class="col-sm-9 mx-1">
                <input type="text" class="form-control" name="texto" placeholder="Buscar" value="{{$texto}}">
            </div>
            <div class="col-auto">
                <input type="submit" class="btn btn-success" value="Buscar">
            </div>           
        </form>  
</div>
