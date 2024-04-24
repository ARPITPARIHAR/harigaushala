<!-- resources/views/send-sms.blade.php -->

<form action="/send-sms" method="post">
    @csrf
    <label for="phone">Phone Number:</label>
    <input type="text" name="phone" required>
    <br>
    <label for="message">Message:</label>
    <textarea name="message" required></textarea>
    <br>
    <button type="submit">Send SMS</button>
</form>

