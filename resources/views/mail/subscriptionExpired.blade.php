<x-mail::message>

Your Subscription has been expired!

<x-mail::table>
    |                        |                              |          
    | ---------------------- |------------------------------| 
    |     Name               |{{ $details['name'] }}        |     
    |     CNIC               |{{ $details['cnic_no'] }}     |                    
    |     Fee schedule       |{{ $details['fee_schedule'] }}|
    |     City               |{{ $details['city'] }}        |
    |     Membership category|{{ $details['mem_cetag'] }}   |
    |     Mobile number      |{{ $details['mobile_no'] }}   |
    |     Registration type  |{{ $details['mem_cetag'] }}   |  
</x-mail::table>

Thanks,<br>

</x-mail::message>
