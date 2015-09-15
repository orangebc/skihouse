   <!-- FORM -->
   <section class="form">
       <div class="container-fluid">
            <h2 class="form__title">Contáctanos</h2>
            <hr class="form__separator">
            <form action="php/send.php" method="post">
                <div class="row">
                   <div class="col-lg-4 field__container">
                        <div class="form-group col-xs-12">
                            <label for="nombre" class="form__label">Nombre</label>
                            <input type="text" class="form-control" name="formNombre" placeholder="Ingrese su nombre" required>

                            <label for="tel" class="form__label">Teléfono</label>
                            <input type="tel" class="form-control" name="formTelefono" placeholder="Teléfono a 10 digitos" maxlength="10" onkeypress="return isNumberKey(event)" required>

                            <label for="email" class="form__label">Email</label>
                            <input type="email" class="form-control" name="formEmail" placeholder="correo@tudominio.com" required>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-12 col-sm-4 no-space">
                                <label for="" class="form__label">Es Usted:</label>
                            </div>
                            <div class="col-xs-6 col-sm-4">
                                <label class="radio-inline form__radio">
                                    <input type="radio" name="formEsUsted" value="Agencia" required> 
                                    Agencia
                                </label>
                            </div> 
                            <div class="col-xs-6 col-sm-4">
                                <label class="radio-inline form__radio">
                                    <input type="radio" name="formEsUsted" value="Particular">
                                    Particular
                                </label>
                            </div> 
                        </div>
                   </div>
                   <div class="col-lg-4 field__container">
                        <!-- Datepicker -->
                        <div class="col-xs-6">
                            <label for="" class="form__label">Fecha de inicio</label>
                            <input type="date" class="form-control" name="formDate">
                        </div>                        
                        <div class="col-xs-6">
                            <label for="" class="form__label">Fecha de regreso</label>
                            <input type="date" class="form-control" name="formDateReturn">
                        </div>
                        <!-- /datepicker -->
                        <!-- Países -->
                        <div class="col-xs-12 col-sm-4">
                            <label class="form__label">Destino</label>
                                <select name="formPais" id="formCountry" required>
                                    <option value="" selected>País</option>
                                    <option value="Canadá">Canadá</option>
                                    <option value="U.S.A">U.S.A</option>
                                    <option value="Alaska">Alaska</option>
                                    <option value="New Mexico">New Mexico</option>
                                </select>
                        </div>
                        <!-- /países -->
                        <!-- Ciudades -->
                        <div class="col-xs-12 col-sm-4">
                            <label class="invisible form__label">-</label>
                            <select name="formEstado" id="formCity" required>
                                <option value="" selected>Estado</option>
                                <option class="canada" value="British Columbia">British Columbia</option>
                                <option class="canada" value="Quebec">Quebec</option>
                                <option class="canada" value="Alberta">Alberta</option>
                                <option class="usa" value="California">California</option>
                                <option class="usa" value="Colorado">Colorado</option>
                                <option class="usa" value="Wyoming">Wyoming</option>
                                <option class="usa" value="Utah">Utah</option>
                                <option class="usa" value="East Coast">East Coast</option>
                                <option class="alaska" value="Alaska">Alaska</option>
                                <option class="newMexico" value="New Mexico">New Mexico</option>
                            </select>
                        </div>
                        <!-- /ciudades -->
                        <!-- Resorts -->
                        <div class="col-xs-12 col-sm-4">
                            <label class="invisible form__label">-</label>
                            <select name="formResort" id="formResort" required>
                                <option value="" selected>Resort</option>
                                <option class="british-columbia" value="Whistler/Blackcomb">Whistler/Blackcomb</option>
                                <option class="quebec" value="Mont Tremblant">Mont Tremblant</option>
                                <option class="quebec" value="Le Massif">Le Massif</option>
                                <option class="quebec" value="Mont Sainte Anne">Mont Sainte Anne</option>
                                <option class="alberta" value="Jasper - Marmot Basin">Jasper Marmot Basin</option>
                                <option class="alberta" value="Lake Louise">Lake Louise</option>
                                <option class="california" value="Heavenly">Heavenly</option>
                                <option class="california" value="Northstar">Northstar</option>
                                <option class="california" value="Mammoth">Mammoth</option>
                                <option class="california" value="Alpine Meadows">Alpine Meadows</option>
                                <option class="california" value="Squaw Valley">Squaw Valley</option>
                                <option class="colorado" value="Beaver Creek">Beaver Creek</option>
                                <option class="colorado" value="Aspen">Aspen</option>
                                <option class="colorado" value="Breckenridge">Breckenridge</option>
                                <option class="colorado" value="Copper Mountain">Copper Mountain</option>
                                <option class="colorado" value="Keystone">Keystone</option>
                                <option class="colorado" value="Vail">Vail</option>
                                <option class="colorado" value="Crested Butte">Crested Butte</option>
                                <option class="colorado" value="Winter Park">Winter Park</option>
                                <option class="wyoming" value="Jackson Hole">Jackson Hole</option>
                                <option class="utah" value="Park City">Park City</option>
                                <option class="utah" value="Deer Valley">Deer Valley</option>
                                <option class="utah" value="Canyons">Canyons</option>
                                <option class="utah" value="Alta">Alta</option>
                                <option class="utah" value="Snowbird">Snowbird</option>
                                <option class="east-coast" value="Stowe Resort">Stowe Resort</option>
                                <option class="east-coast" value="Sunday River">Sunday River</option>
                                <option class="alaska" value="Alyeska">Alyeska</option>
                                <option class="new-mexico" value="Taos">Taos</option>
                            </select>
                        </div>
                        <!-- /resorts -->
                        <div class="col-xs-12 col-sm-6">
                            <label for="" class="form__label">Personas:</label>
                            <input type="number" class="form-control" name="formPersonas" max="999" onkeypress="return isNumberKey(event)" placeholder="Número de Adultos" required>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <label for="" class="nope form__label">Niños:</label>
                            <input type="number" class="form-control" name="formNinos" max="999" onkeypress="return isNumberKey(event)" placeholder="Número de Niños" required>
                        </div>
                   </div>
                   <div class="col-lg-4 field__container">
                        <div class="radio__container">
                            <label for="" class="form__label">Wishlist</label>
                            <div class="col-xs-12 col-sm-3 no-space">
                                <div class="checkbox">
                                    <label>
                                      <input type="checkbox" id="formWishAvion" name="formWishlist[]" value="Avión"> Avión
                                    </label>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-3 no-space">
                                <div class="checkbox">
                                    <label>
                                      <input type="checkbox" id="formWishLiftTicket" name="formWishlist[]" value="Lift Ticket"> Lift Ticket
                                    </label>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-3 no-space">
                                <div class="checkbox">
                                    <label>
                                      <input type="checkbox" id="formWishTransporte" name="formWishlist[]" value="Traslado"> Traslado
                                    </label>
                                </div>
                            </div>                            
                            <div class="col-xs-12 col-sm-3 no-space">
                                <div class="checkbox">
                                    <label>
                                      <input type="checkbox" id="formWishSeguro" name="formWishlist[]" value="Seguro"> Seguro
                                    </label>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-3 no-space">
                                <div class="checkbox">
                                    <label>
                                      <input type="checkbox" id="formWishEquipoSki" name="formWishlist[]" value="Equipo de Ski"> Equipo de Ski
                                    </label>
                                </div>
                            </div>                            
                            <div class="col-xs-12 col-sm-3 no-space">
                                <div class="checkbox">
                                    <label>
                                      <input type="checkbox" id="formWishClasesSki" name="formWishlist[]" value="Clase de Ski"> Clase de Ski
                                    </label>
                                </div>
                            </div>                            
                            <div class="col-xs-12 col-sm-3 no-space">
                                <div class="checkbox">
                                    <label>
                                      <input type="checkbox" id="formWishResorts" name="formWishlist[]" value="Hospedaje"> Hospedaje
                                    </label>
                                </div>
                            </div>                            
                            <div class="col-xs-12 col-sm-3 no-space">
                                <div class="checkbox">
                                    <label>
                                      <input type="checkbox" id="formWishApresSki" name="formWishlist[]" value="Aprés Ski"> Aprés Ski
                                    </label>
                                </div>
                            </div>
                        </div>
                   </div>
                   <div class="col-lg-4 field__container">
                        <div class="radio__container">
                            <label for="" class="form__label">Dónde nos vió</label>
                            <div class="col-xs-12 col-sm-4">
                                <label class="radio-inline form__radio">
                                    <input type="radio" name="formDondeNosVio" value="Google"> Google
                                </label>
                            </div>
                            <div class="col-xs-12 col-sm-4">
                                <label class="radio-inline form__radio">
                                    <input type="radio" name="formDondeNosVio" value="Recomendación"> Recomendación
                                </label>
                            </div>
                            <div class="col-xs-12 col-sm-4">
                                <label class="radio-inline form__radio">
                                    <input type="radio" name="formDondeNosVio" value="Medios Impresos"> Med. Impreso
                                </label>
                            </div>
                            <div class="col-xs-12 col-sm-4">
                                <label class="radio-inline form__radio">
                                    <input type="radio" name="formDondeNosVio" value="Medio Digital"> Med. Digital
                                </label>
                            </div>                       
                            <div class="col-xs-12 col-sm-4">
                                <label class="radio-inline form__radio">
                                    <input type="radio" name="formDondeNosVio" value="Redes Sociales"> Redes Sociales
                                </label>
                            </div>
                            <div class="col-xs-12 col-sm-4">
                                <label class="radio-inline form__radio">
                                    <input type="radio" name="formDondeNosVio" value="Sitio Web"> Sitio Web
                                </label>
                            </div>
                        </div>
                   </div>
                </div>

                <div class="row">
                    <div class="col-lg-8">
                        <div class="form__area">
                            <label for="" class="form__label">Comentarios Adicionales</label>
                            <textarea class="form-control custom__textarea" name="formComentarios" rows="3" required></textarea>
                        </div>
                    </div>
                    <div class="col-lg-4 form__btn--container">
                        <input type="submit" name="submit" class="form__btn" value="Enviar">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4 form__avisoPrivacidad">
                        <h5 class="form__privacy--name"><a href="aviso-privacidad.php">Aviso de privacidad</a></h5>
                        <hr class="form__separator">
                    </div>
                    <div class="col-lg-4 form__avisoPrivacidad">
                        <label class="radio-inline form__radio">
                            <input type="radio" value="terminos" name="terminos" required>Acepto Términos y condiciones
                        </label>                       
                    </div>
                </div>

            </form>
       </div>
   </section>

   <script>
       function isNumberKey(evt){
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }
   </script>