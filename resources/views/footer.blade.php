
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="footer_logo"><a href="#">Tiana´s Boutique</a></div>
                <nav class="footer_nav">
                @if (Auth::user()->role_id == 1) 
                    <ul>
                        <li><a href="#">home</a></li>
                        <li><a href="{{ route('listEmplea') }}">Gestionar Empleados</a></li>
                        <li><a href="{{ route('reporteUsers') }}">Reporte Nuevos Usuarios</a></li>
                        <li><a href="{{ route('reporteAcep') }}">Reporte Aceptación de Productos</a></li>
                        <li><a href="{{ route('reporteUsuaProd') }}">Reporte Usuarios con más pedidos</a></li>
                        <li><a href="{{ route('reporteCantPed') }}">Reporte Cantidad de pedidos entregados</a></li>

                        
                       
                    </ul>
                @endif
                @if (Auth::user()->role_id == 2) 
                    <ul>
                        <li><a href="#">home</a></li>
                        
                        
                    </ul>
                @endif    
                @if (Auth::user()->role_id == 3) 
                    <ul>
                        <li><a href="#">home</a></li>
                        <li><a href="{{ route('listCatalog') }}">Catálogos</a></li>
                        <li><a href="{{ route('listCategor') }}">Categorías</a></li>
                        <li><a href="{{ route('listSubCate') }}">SubCategorias</a></li>
                        <li><a href="{{ route('productos') }}">Productos</a></li>
                        <li><a href="{{ route('listSolicitud') }}">Solicitudes</a></li>
                        <li><a href="{{ route('listSoliEspecialAdmin') }}">Solicitudes Especiales</a></li>

                       
                    </ul>
                @endif
                @if (Auth::user()->role_id == 4) 
                    <ul>
                        <li><a href="#">home</a></li>
                        <li><a href="{{ route('CatalogosCliente') }}">Catálogos</a></li>
                        <li><a href="{{ route('miListSolicitud') }}">Solicitudes</a></li>
                        <li><a href="{{ route('listSolicitudEspecial') }}">Solicitud Especial</a></li>
                        <li><a href="{{  route('promoClientes') }}">Promociones</a></li>
                        <li><a href="{{ route('Contacto') }}">Contáctanos</a></li>
                        
                    </ul>
                @endif

                </nav>
                <div class="footer_social">
                    <ul>
                        
                        <li><a target="_blank" href="https://instagram.com/tianas__boutique?igshid=YmMyMTA2M2Y"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                       
                    </ul>
                </div>
                <div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
            </div>
        </div>
    </div>
</footer>