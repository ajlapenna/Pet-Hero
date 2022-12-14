<?php
    require_once("validate-session.php");
    include('header.php');
    include('owner-nav-bar.php');

    use Models\Reserve;
?>

<?php if(isset($message)) echo $message ?>

<table style="text-align: center">
    <thead>
        <tr>
            <th><label for="">Reservation #</label></th>
            <th><label for="">Keeper Name</label></th>
            <th><label for="">Pets</label></th>
            <th><label for="">From</label></th>
            <th><label for="">To</label></th>
            <th><label for="">Total Amount</label></th>
            <th><label for="">Status</label></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($reserveList as $reserve) { ; ?>
        <tr>
            <td><?php echo $reserve->getId()?></td>
            <td><?php echo $userKeeperList[$i]->getName()?></td>
            <td>
                <?php foreach($petListArray[$i++] as $pet) {
                    echo $pet->getName();
                } ?>
            </td>
            <td><?php echo $reserve->getInitialDate()?></td>
            <td><?php echo $reserve->getEndDate()?></td>
            <td><?php echo $reserve->getTotalPrice()?></td>
            <td><?php if($row["reserveStatus"] == 2) echo "Pending"; 
                        else if($row["reserveStatus"] == 1) echo "Accepted";
                            else echo "Rejected" ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>