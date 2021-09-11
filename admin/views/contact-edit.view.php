<form action="contact-edit.php?id=<?php echo e($message["id"]); ?>" method="POST">
    <div class="mb-3">
        <label for="inputDate1" class="form-label">Datum</label>
        <input name="timestamp_date" required="required" type="date" class="form-control" id="inputDate1" value="<?php echo e(date("Y-m-d", $message["timestamp"])); ?>">
    </div>
    <div class="mb-3">
        <label for="inputDate2">Uhrzeit:</label>
        <input type="text" name="timestamp_time" class="form-control" id="inputDate2" value="<?php echo e(date("H:i:s", $message["timestamp"]));?>" required="required"> 
    </div>
    <div class="mb-3">
        <label for="inputName1" class="form-label">Name</label>
        <input name="name" required="required" type="text" class="form-control" id="inputName1" value="<?php echo e($message["name"]); ?>">
    </div>
    <div class="mb-3">
        <label for="inputEmail1" class="form-label">Email</label>
        <input name="email" required="required" type="email" class="form-control" id="inputEmail1" value="<?php echo e($message["email"]); ?>">
    </div>
    <div class="mb-3">
        <label for="inputSubject1" class="form-label">Betreff</label>
        <input name="subject" required="required" type="text" class="form-control" id="inputSubject1" value="<?php echo e($message["subject"]); ?>">
    </div>
    <div class="form-group">
        <label for="inputMessage1">Nachricht:</label>
        <textarea name="message" required="required" class="form-control" rows="4" id="inputMessage1"><?php echo e($message["message"]); ?></textarea>
    </div>
        <button type="submit" required="required" class="btn btn-primary mt-2">Speichern!</button>
</form>