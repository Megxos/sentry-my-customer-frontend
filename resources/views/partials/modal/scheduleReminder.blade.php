<div class="modal fade" id="scheduleReminderModal" tabindex="-1" role="dialog"
aria-labelledby="scheduleReminderModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Schedule Reminder</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form
                action="{{ route('reminder', $debtor->store_ref_id.'-'.$debtor->customer_ref_id.'-'.$debtor->_id) }}"
                method="POST">
                @csrf
                <input type="hidden" name="transaction_id" value="{{old('transaction_id', $debtor->_id)}}">

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="schedule_date">Date</label>
                        <input type="date" name="schedule_date" class="form-control"
                            value="{{ old('schedule_date') }}" placeholder="" required minlength="3" maxlength="16">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="schedule_time">Time</label>
                        <input type="time" name="schedule_time" class="form-control"
                            value="{{ old('schedule_time') }}" placeholder="" required minlength="3" maxlength="16">
                    </div>
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <textarea name="message" class="counter form-control" id="scheduleMessage" placeholder="Message"
                        maxlength="140" row="10">{{ old('message') }}</textarea>
                    <p class="charNum m-0 p-0"></p>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Send Reminder</button>
            </form>
        </div>
    </div>
</div>
</div>
