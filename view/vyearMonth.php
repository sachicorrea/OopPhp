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
                        <td>Month</td>
                        <td><?php echo $monthYear->getNombre(); ?></td>
                    </tr>
                    
                    <tr>
                        <td>Days</td>
                        <td><?php echo $monthYear->getDias(); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <span><a href="index.php">Return</span>