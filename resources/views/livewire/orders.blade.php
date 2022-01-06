@section('title','Agregar Pedido')

<div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div class="d-block mb-4 mb-md-0">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item">
                        <a href="#">
                            <span class="fas fa-home"></span>
                        </a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Jointrust</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Agregar Pedido</li>
                </ol>
            </nav>
        </div>
    </div>

    <div>
        <form>
            <div class="row">
                <div class="col-4">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-6">
                                <img src="../../assets/img/team/profile-picture-1.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    <div class="text-end" style="margin-top: 25px;">
                                        <a class="text-secondary"> <small><i class="fas fa-cart-plus"></i> Agregar </small></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-6">
                                <img src="../../assets/img/team/profile-picture-1.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    <div class="text-end" style="margin-top: 25px;">
                                        <a class="text-secondary"> <small><i class="fas fa-cart-plus"></i> Agregar </small></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-6">
                                <img src="../../assets/img/team/profile-picture-1.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    <div class="text-end" style="margin-top: 25px;">
                                        <a class="text-secondary"> <small><i class="fas fa-cart-plus"></i> Agregar </small></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card border-0 shadow my-4">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10 col-xl-8 col-xxl-6">
                        <div class="card-header border-0 text-center">
                            <h2 class="h3">Selecciona tu producto</h2>
                        </div>
                        <div class="card-body">
                            <!-- Choice Select -->
                            <label class="my-1 me-2" for="state">Select state:</label>
                            <select id="products" class="w-100" name="state">
                                <option value="AL">Alabama</option>
                                <option value="AK">Alaska</option>
                                <option value="AZ">Arizona</option>
                                <option value="AR">Arkansas</option>
                                <option value="CA">California</option>
                                <option value="CO">Colorado</option>
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card border-0 table-wrapper table-responsive">
                <div>
                    <table class="table product-table align-items-center" id='table-data'>
                        <thead class="thead-dark">
                            <tr class="text-center">
                                <th style="width: 25%;">Producto</th>
                                <th style="width: 10%">Cantidad</th>
                                <th style="width: 10%">Precio</th>
                                <th style="width: 10%">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td >
                                    <div class="input-group">
                                        <input type="text" class="form-control product_title" placeholder="Selecciona un producto...">
                                        <button class="btn btn-pill btn-outline-gray-500 select_product" type="button" data-value="row1"><i class="fas fa-search" aria-hidden="true"></i></button>
                                      </div>
                                </td>
                                <td>
                                    <input class="form-control" type="number" placeholder="No.">
                                </td>
                                <td>
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i class="fas fa-dollar-sign"></i>
                                        </span>
                                        <input class="form-control datepicker-input">
                                    </div>
                                </td>
                                <td class="text-end">
                                    <p id="total">
                                    <i class="fas fa-dollar-sign"></i> 0,00
                                        <span class="hide"></span>
                                    </p>
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td colspan="4">
                                    <a class="text-secondary" id="duplicate"> <i class="fas fa-cart-plus"></i> Agregar Producto </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card border-0 shadow components-section my-4">
                <div class="row">
                    <div class="col-6 my-4 mx-4">
                        <label for="textarea">Comentarios</label>
                        <textarea class="form-control textarea" placeholder="Cuéntanos si tienes alguna sugerencias o recomendación especial." id="textarea" rows="4"></textarea>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-4 d-flex justify-content-end mb-4 py-4">
                        <div class="mt-4">
                            <table class="table table-clear">
                                <tbody>
                                    <tr>
                                        <td class="left">
                                            <strong>Subtotal</strong>
                                        </td>
                                        <td class="right">$8.497,00</td>
                                    </tr>
                                    <tr>
                                        <td class="left">
                                            <strong>Discount (20%)</strong>
                                        </td>
                                        <td class="right">$1,699,40</td>
                                    </tr>
                                    <tr>
                                        <td class="left">
                                            <strong>VAT (10%)</strong>
                                        </td>
                                        <td class="right">$679,76</td>
                                    </tr>
                                    <tr>
                                        <td class="left">
                                            <strong>Total</strong>
                                        </td>
                                        <td class="right">
                                            <strong>$7.477,36</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="right" colspan="2">
                                            <div class="mt-2">
                                                <p>¿Aceptarías recibir una entrega parcial de tu pedido?</p>
                                                <div class="row text-center">
                                                    <div class="col-6">
                                                        
                                                        <input class="form-check-input" type="radio" name="delivery" id="exampleRadios1" value="Obvio" > Obvio microbio                
                                                    </div>
                                                    <div class="col-6">
                                                        <input class="form-check-input" type="radio" name="delivery" id="exampleRadios1" value="Pailas" > Pailas
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-end" colspan="2">
                                            <button type="button" class="btn btn-link text-gray-600">Cancelar</button>
                                            <button class="btn btn-secondary" >Hacer pedido</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
<div>
@include('livewire.form_orders')