<?php include 'header.php'; ?>

<div class="sec-pad">
    <div class="container">
        <div class="row form-row">
            <div class="col-lg-12">
                <div class="title mb-2">
                    <h6 class="bold"><?php echo $RegistrationConfirmed ?> <span class="fa fa-check-circle theme-color ml-2"></span></h6>
                    <span class="underline"></span>
                </div>
                <table class="table table-borderless info-table">
                    <tbody>
                        <tr>
                            <td><?php echo $TrainingCourses ?>:</td>
                            <td>Diploma in Arbitraon in Marime Accident Disputes</td>
                        </tr>
                        <tr>
                            <td><?php echo $StartingDate ?>:</td>
                            <td>04/02/2021</td>
                        </tr>
                        <tr>
                            <td><?php echo $EndingDate ?>:</td>
                            <td>04/03/2021</td>
                        </tr>
                    </tbody>
                </table>
                <div class="title mb-2 mt-5">
                    <h6 class="bold"><?php echo $CandidateInformation ?></h6>
                    <span class="underline"></span>
                </div>
                <table class="table table-borderless info-table">
                    <tbody>
                        <tr>
                            <td><?php echo $Name ?>:</td>
                            <td>Bader Mahmoud Darweesh</td>
                        </tr>
                        <tr>
                            <td><?php echo $Nationality ?>:</td>
                            <td>Kuwait</td>
                        </tr>
                        <tr>
                            <td><?php echo $Email ?>:</td>
                            <td>Bader@bader.com</td>
                        </tr>
                        <tr>
                            <td><?php echo $PhoneNumber ?>:</td>
                            <td>65680566</td>
                        </tr>
                        <tr>
                            <td><?php echo $Qualification ?>:</td>
                            <td>Diploma</td>
                        </tr>
                    </tbody>
                </table>
                <button class="btn header-btn big-btn"><?php echo $home ?></button>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>