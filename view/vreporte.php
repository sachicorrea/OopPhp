
        <div class="activity">
            <table id="bill">
                <thead>
                    <tr>
                        <th scope="col">Item</th>
                        <th scope="col">Value</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Nombre</td>
                        <td><?php echo $factura->getNombreCliente(); ?></td>
                    </tr>
                    
                    <tr>
                        <td>Dirección</td>
                        <td><?php echo $factura->getDireccion(); ?></td>
                    </tr>

                    <tr>
                        <td>Estrato</td>
                        <td><?php echo $factura->getEstrato(); ?></td>
                    </tr>

                    <tr>
                        <td>m3 Acueducto</td>
                        <td><?php echo $factura->getmetrosAcueducto(); ?></td>
                    </tr>

                    <tr>
                        <td>m3 Alcantarillado</td>
                        <td><?php echo $factura->getMetrosAlcantarillado() ;?></td>
                    </tr>

                    <tr>
                        <td>Total Acueducto</td>
                        <td><?php echo $factura->getTotalAcueducto(); ?></td>
                    </tr>
                    
                    <tr>
                        <td>Total Alcantarillado</td>
                        <td><?php echo $factura->getTotalAlcantarillado(); ?></td>
                    </tr>

                    <tr>
                        <td>Subtotal</td>
                        <td><?php echo $factura->getSubtotal(); ?></td>
                    </tr>
                    
                    
                    <tr>
                        <td>Descuento</td>
                        <td><?php echo $factura->getDescuento(); ?></td>
                    </tr>

                    <tr>
                        <td>Total</td>
                        <td><?php echo $factura->getTotalAPagar(); ?></td>
                    </tr>
                    
                </tbody>
            </table>
        </div>

        <span><a href="index.php">Return</span>

        

        