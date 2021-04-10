
        <div class="container">
            <div class="act-1">
                <h2>1st activity</h2>
                <p>Realizar un programa el cual solicite un número de año y un numero de mes y muestre el nombre del mes y la cantidad de días que posee (Tener en cuenta los años bisiestos)</p>
            
                <div class="activity">
                    <form action="yearMonth.php" method="post">
                        <label for="month">Select a number for a month</label>
                        <select id="month" name="month">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>

                        <label for="year">year</label>
                        <input type="number" id="year" name="year" placeholder="Enter a year" required>

                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>

            <div class="act-2">
                <h2>2nd activity</h2>
                <p>La empresa Milagrito S.A. tiene la siguiente tabla de parámetros para pagar las comisiones de sus ejecutivos de ventas:</p>

                <p>Escriba un programa que al introducir la cantidad vendida por el ejecutivo de ventas, calcule de cuánto será su comisión. Implementar el siguiente diagrama de clases.</p>
            
                <div class="activity">
                    <form action="commisionSales.php" method="post">

                        <label for="sales">Commission</label>
                        <input type="number" id="sales" name="sales" placeholder="Enter salesperson's sales" required>

                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>

            <div class="act-3">
                <h2>3rd activity</h2>
                <div class="description">
                    <p>Un servicio de transporte cubre los siguientes destinos al precio descrito en un mismo viaje.</p>
                    
                    <ul class="large">
                        <li>Neira $4.000</li>
                        <li>Aranzazu $8.000</li>
                        <li>Salamina $12.000</li>
                        <li>Pácora $15.000</li>
                        <li>Aguadas $20.000</li>
                    </ul>
                    
                    <p>Realizar un programa que solicite la cantidad de pasajeros a cada destino y la final mostrar la cantidad de dinero recolectada en el viaje. Implementar la siguiente clase.</p>
                </div>

                <form>
                    <!--Neira-->
                    <div class="row">
                        <div class="col">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="passengers[neira]" value="4000">Neira
                                </label>
                            </div>
                        </div> 
                        
                        <div class="col">
                            <input type="number" class="form-control form-control-sm" id="passengersNeira" placeholder="Enter number passengers" name="passengersNeira">
                        </div>
                    </div>
                    
                    <!--Aranzazu-->
                    <div class="row">
                        <div class="col">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="city[aranzazu]" value="8000">Aranzazu
                                </label>
                            </div>
                        </div> 
                        
                        <div class="col">
                            <input type="number" class="form-control form-control-sm" id="passengersAranzazu" placeholder="Enter number passengers" name="passengersAranzazu">
                        </div>
                    </div>

                    <!--Salamina-->
                    <div class="row">
                        <div class="col">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="city[salamina]" value="12000">Salamina
                                </label>
                            </div>
                        </div> 
                        
                        <div class="col">
                            <input type="number" class="form-control form-control-sm" id="passengersSalamina" placeholder="Enter number passengers" name="passengersSalamina">
                        </div>
                    </div>

                    <!--Pácora-->
                    <div class="row">
                        <div class="col">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="city[pacora]" value="15000">Pácora
                                </label>
                            </div>
                        </div> 
                        
                        <div class="col">
                            <input type="number" class="form-control form-control-sm" id="passengersPacora" placeholder="Enter number passengers" name="passengersPacora">
                        </div>
                    </div>

                    <!--Aguadas-->
                    <div class="row">
                        <div class="col">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="city[aguadas]" value="20000">Aguadas
                                </label>
                            </div>
                        </div> 
                        
                        <div class="col">
                            <input type="number" class="form-control form-control-sm" id="passengersAguadas" placeholder="Enter number passengers" name="passengersAguadas">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form> 
            </div>

            <div class="act-4">
                <h2>4th activity</h2>
                <p>Una empresa de envíos lo contrata para desarrollar una aplicación que calcule el costo por entrega. La empresa le permite dos tipos de paquetes que son, Carta y Caja, y dos tipos de servicio, Siguiente Día y Hoy Mismo. La tabla siguiente muestra la fórmula para calcular el costo del envió</p>
                <p>Elabore un programa que reciba el tipo de paquete, el tipo de servicio y el peso del paquete en kilos, y calcule el costo del envío.</p>
                <p>La aplicación debe implementar el siguiente diagrama de clases, y además tener ComboBox para seleccionar el tipo de paquete y el tipo de servicio.</p>
                
                <div class="activity">
                    <form action="packagecost.php" method="post">
                        <label for="category">Category package</label>
                        <select id="category" name="category">
                            <option value="envelope">Envelope</option>
                            <option value="box">Box</option>
                        </select>

                        <label for="service">Service</label>
                        <select id="service" name="service">
                            <option value="today">Today</option>
                            <option value="next_day">Next day</option>
                        </select>

                        <label for="weight">Weight</label>
                        <input type="number" id="weight" name="weight" placeholder="Enter envelope/box weight" required>

                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>

            <div class="act-6">
                <h2>6th activity</h2>
                <p>La clase FacturaAgua tiene como atributos los datos del cliente y la cantidad de metros cúbicos consumidos por acueducto y la cantidad de metros cúbicos consumidos por alcantarillado.</p>
                <p>La tarifa de estos servicios se cobrara de la siguiente manera.</p>
                <p>Si la cantidad de metros cúbicos de acueducto están entre 0 y 20, se le cobrara al suscriptor a $ 1450 cada metro. Si se superan los 20 metros, se le cobrara al suscriptor los primeros 20 metros a $ 1450 y el resto de metros al 150% de ese valor.</p>
                <p>Si la cantidad de metros cúbicos de alcantarillado están entre 0 y 20, se le cobrara al suscriptor a $1100 cada metro. Si se superan los 20 metros, se le cobrara al suscriptor los primeros 20 metros a $ 1100 y el resto de metros al 150% de ese valor.</p>
            
                <div class="activity">
                    <form action="reporte.php" method="post">
                        <label for="nombre">Client's name</label>
                        <input type="text" id="nombre" name="nombre" placehoder="Your name" required>


                        <label for="direccion">Address</label>
                        <input type="text" id="direccion" name="direccion" placeholder="Your address">

                        <label for="estrato">Economic Level</label>
                        <select id="estrato" name="estrato">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select>

                        <label for="acueducto">m3 Water Consumption</label>
                        <input type="number" id="acueducto" name="acueducto" placeholder="Your aqueduct consumption" required>


                        <label for="alcantarillado">m3 Sewage</label>
                        <input type="number" id="alcantarillado" name="alcantarillado" placeholder="Your sewage consumption" required>

                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>

