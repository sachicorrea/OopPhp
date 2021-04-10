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
                        <td>City</td>
                        <td><?php echo $factura->getNombreCliente(); ?></td>
                    </tr>
                    
                    <tr>
                        <td>Trip Cost</td>
                        <td><?php echo $factura->valorPasaje(); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <span><a href="index.php">Return</span>