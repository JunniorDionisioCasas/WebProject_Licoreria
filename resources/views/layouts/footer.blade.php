<div id="sns_footer" class="footer_style vesion2 wrap">
    <div id="sns_footer_top" class="footer">
        <div class="container">
            <div class="container_in">
                <div class="row">
                    <div class="col-md-3 col-sm-12 col-xs-12 column0">
                        <div class="contact_us">
                            <h6>Contactanos</h6>
                            <ul class="fa-ul">
                                <li class="pd-right">
                                    <i class="fa-li fa fw fa-home"> </i>
                                    Jr. lima N 136 San Jerónimo de Tunan - Huancayo, Junín
                                </li>
                                <li>
                                    <i class="fa-li fa fw fa-phone"> </i>
                                    <p>(21) 975 877 000</p>
                                </li>
                                <li>
                                    <i class="fa-li fa fw fa-brands fa-facebook-f"> </i>
                                    <p>
                                        <a href="https://web.facebook.com/Licoreria-y-bazar-San-Sebastian-105198031412310">
                                            Siguenos en Facebook
                                        </a>
                                        <!-- <a href="mailto:sansebastian@gmail.com">sansebastian@gmail.com</a> -->
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-phone-12 col-xs-6 col-sm-3 col-md-2 column column1">
                        <h6>Atención al cliente</h6>
                        <ul>
                            <li>
                                <span href="#">Horarios de atención en tienda presencial: 8:00am - 8:00pm</span>
                            </li>
                            <!-- <li>
                                <a href="#">Preguntas frecuentes</a>
                            </li> -->
                            <!-- <li>
                                <a href="#">Cambios y devoluciones</a>
                            </li> -->
                        </ul>
                    </div>
                    <div class="col-phone-12 col-xs-6 col-sm-3 col-md-2 column column2 cuentaColumn">
                        <h6>Cuenta del usuario</h6>
                        <ul>
                            <li>
                                <a href="/user/profile">Mi perfil</a>
                            </li>
                            @auth
                            <li>
                                <a href="/historial_compras">Mis compras</a>
                            </li>
                            @endauth
                            <li>
                                <a href="/carrito_compras">Mi carrito</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-phone-12 col-xs-6 col-sm-3 col-md-2 column column3">
                        <h6>Políticas y condiciones</h6>
                        <ul>
                            <li>
                                <a href="/privacy-policy" target="_blank" rel="noopener noreferrer">Políticas de datos personales</a>
                            </li>
                            <li>
                                <a href="/terms-of-service" target="_blank" rel="noopener noreferrer">Términos y condiciones</a>
                            </li>
                            <!-- <li>
                                <a href="#">Condiciones de promociones</a>
                            </li> -->
                        </ul>
                    </div>
                    <div class="col-phone-12 col-xs-6 col-sm-3 col-md-3 column column4">
                        <div class="subcribe-footer">
                            <div class="block_border block-subscribe">
                                <div class="block_head">
                                    <h6>Llevanos donde estés</h6>
                                    <p>Descarga nuestra aplicación para android:</p>
                                </div>
                                <div class="centerDiv">
                                    <a href="/apk/Licoreria_Bazar_San_Sebastian.apk" download>
                                        <img src="/images/logo/logo-512x512.png" alt="Descargar app android" class="imgApp"/>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="sns_footer_bottom" class="footer">
        <div class="container">
            <div class="row">
                <div class="bottom-pd1 col-sm-6">
                    <div class="sns-copyright">
                        © @php echo date("Y");@endphp Licorería San Sebastian. Todos los derechos reservados
                    </div>
                </div>
                <div class="bottom-pd2 col-sm-6">
                    <div class="payment">
                        <span>Tipos de pago aceptados </span>
                        <img src="images/staticas/metodos_pago.png" alt="" width="230" height="30">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
