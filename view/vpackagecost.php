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
                        <td>Category</td>
                        <td><?php echo $packageItems->getCategory(); ?></td>
                    </tr>
                    
                    <tr>
                        <td>Service</td>
                        <td><?php echo $packageItems->getService(); ?></td>
                    </tr>

                    <tr>
                        <td>Weight</td>
                        <td><?php echo $packageItems->getWeight(); ?></td>
                    </tr>

                    <tr>
                        <td>Cost</td>
                        <td><?php echo $packageItems->CostMail(); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <span><a href="index.php">Return</span>