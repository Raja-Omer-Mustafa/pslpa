<x-mail::message>
You have been registerd with PSLPA successfully !
<x-mail::table>
    |                        |                              |          
    | ---------------------- |------------------------------| 
    |     Name               |{{ $mailData['name'] }}        |     
    |     CNIC               |{{ $mailData['cnic_no'] }}     |                    
    |     Fee schedule       |{{ $mailData['fee_schedule'] }}|
    |     City               |{{ $mailData['city'] }}        |
    |     Membership category|{{ $mailData['mem_cetag'] }}   |
    |     Mobile number      |{{ $mailData['mobile_no'] }}   |
    |     Registration type  |{{ $mailData['mem_cetag'] }}   |  
</x-mail::table>
Thanks,<br>

</x-mail::message>
