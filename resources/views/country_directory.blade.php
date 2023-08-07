@extends('layouts.app')

@section('content')
<div style="margin: 5% 0% 5% 0%;">
    {{-- <table class="table table-striped ">
        <thead>
            <tr>
            <th>#</th>
            <th>Name</th>
            <th>Affiliation</th>
            <th>City</th>
            <th>status</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Aaliya kanwal</td>
                <td>Govet</td>
                <td>Cell</td>
                <td>Cell</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
            </tr>
            <tr>
                <td>7</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
            </tr>
            <tr>
                <td>8</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
            </tr>
            <tr>
                <td>9</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
            </tr>
        </tbody>
    </table> --}}

    <table class="table table-striped ">
        <thead>
            <tr>
            <th>#</th>
            <th>Name</th>
            <th>Affiliation</th>
            <th>City</th>
            <th>status</th>
            </tr>
            </thead>
        <tr>
            <td>1</td>
            <td>Aaliya kanwal</td>
            <td>Govt special education Centre </td>
            <td>Rawalpindi</td>
            <td>Active</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Afshan begum</td>
            <td>Islamabad institute of medical</td>
            <td>Islamabd</td>
            <td>Active</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Aleena irum</td>
            <td>Private clinic</td>
            
            <td>Lahore</td>
            <td>Active</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Ali Hussain</td>
            <td>Speech Therapist - Sialkot</td>
            <td>Sialkot</td>
            <td>Active</td>
        </tr>
        <tr>
            <td>5</td>
            <td>Amina Imran</td>
            <td>Quaid e Azam International Hos</td>
            <td>Rawalpindi</td>
            <td>Active</td>
        </tr>
        <tr>
            <td>6</td>
            <td>Amna iqbal</td>
            <td>Maxhealth hospital islamabad</td>
            <td>Islamabad</td>
            <td>Active</td>
        </tr>
        <tr>
            <td>7</td>
            <td>Amna Tariq</td>
            <td>Step to learn</td>
            <td>Islamabad</td>
            <td>Active</td>
        </tr>
        <tr>
            <td>8</td>
            <td>Anam Jamil</td>
            <td>Shifa Tameer e Millat Universi</td>
            <td>Islamabad</td>
            <td>Active</td>
        </tr>
        <tr>
            <td>9</td>
            <td>Anees Fatima</td>
            <td>IMR</td>
            <td>Islamabad</td>
            <td>Active</td>
        </tr>
        <tr>
            <td>10</td>
            <td>Anum Firasat</td>
            <td>Bharakahu</td>
           
            <td>Islamabad</td>
            <td>Active</td>
        </tr>
        <tr>
            <td>11</td>
            <td>Arshad Mahmood Naz</td>
            <td>Mayo hospital Lahore</td>
            <td>Lahore</td>
            <td>Active</td>
        </tr>
        <tr>
            <td>12</td>
            <td>Asifa Saleem</td>
            <td>Chaklala Scheme 3/DHA2</td>
            <td>Rawalpindi</td>
            <td>Active</td>
        </tr>
        <tr>
            <td>13</td>
            <td>Asima Mahmood</td>
            <td>Special Education Department</td>
            <td>Lahore</td>
            <td>Active</td>
        </tr>
        <tr>
            <td>14</td>
            <td>Asma Mehboob Ghuncha</td>
            <td>Senior lecturer at Isra univer</td>
            <td>Islamabad</td>
            <td>Active</td>
        </tr>
        <tr>
            <td>15</td>
            <td>Atia yasmeen</td>
            <td>GSEC Hassanabdal</td>
            <td>Rawalpindi</td>
            <td>Active</td>
        </tr>
        <tr>
            <td>16</td>
            <td>Ayesha Bukhari</td>
            <td>Al-noor Special Children Schoo</td>
            <td>Multan</td>
            <td>Active</td>
        </tr>
        <tr>
            <td>17</td>
            <td>Faryal Naseer</td>
            <td>Institute of Medical Rehabilit</td>
            <td>Islamabad</td>
            <td>Active</td>
        </tr>
        <tr>
            <td>18</td>
            <td>Farzana Murtaza</td>
            <td>KHYBER TEACHING HOSPITAL PESHA</td>
            <td>Peshawar</td>
            <td>Active</td>
        </tr>
        <tr>
            <td>19</td>
            <td>Gulshan Ara</td>
            <td>shifa hospital islamabad</td>
            <td>islamabad</td>
            <td>Active</td>
        </tr>
        <tr>
            <td>20</td>
            <td>Hafsa Ali</td>
            <td>Lahore</td>
            <td>kassowal</td>
            <td>Active</td>
        </tr>
       
    </table>
</div>
    
@endsection