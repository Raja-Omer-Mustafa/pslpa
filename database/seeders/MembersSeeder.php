<?php

namespace Database\Seeders;

use App\Models\RegMemebers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MembersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // Provided data
            [
                'id' => 6,
                'name' => 'Aaliya kanwal',
                'affiliation' => 'Govt special education Centre ',
                'city' => 'Rawalpindi',
                'status' => 1,
            ],
            [
                'id' => 7,
                'name' => 'Afshan begum',
                'affiliation' => 'Islamabad institute of medical',
                'city' => 'Islamabad',
                'status' => 1,
            ],
            [
                'id' => 8,
                'name' => 'Aleena irum',
                'affiliation' => 'Private clinic',
                'city' => 'Islamabad ,Lahore',
                'status' => 1,
            ],
            [
                'id' => 9,
                'name' => 'Ali Hussain',
                'affiliation' => 'Speech Therapist - Sialkot',
                'city' => 'Sialkot',
                'status' => 1,
            ],
            [
                'id' => 10,
                'name' => 'Amina Imran',
                'affiliation' => 'Quaid e Azam International Hos',
                'city' => 'Rawalpindi',
                'status' => 1,
            ],
            [
                'id' => 11,
                'name' => 'Amna iqbal',
                'affiliation' => 'Maxhealth hospital islamabad',
                'city' => 'Islamabad',
                'status' => 1,
            ],
            [
                'id' => 12,
                'name' => 'Amna Tariq',
                'affiliation' => 'Step to learn',
                'city' => 'Islamabad',
                'status' => 1,
            ],
            [
                'id' => 13,
                'name' => 'Anam Jamil',
                'affiliation' => 'Shifa Tameer e Millat Universi',
                'city' => 'Islamabad',
                'status' => 1,
            ],
            [
                'id' => 14,
                'name' => 'Anees Fatima',
                'affiliation' => 'IMR',
                'city' => 'Islamabad',
                'status' => 1,
            ],
            [
                'id' => 15,
                'name' => 'Anum Firasat',
                'affiliation' => 'Bharakahu, Islamabad',
                'city' => 'Islamabad',
                'status' => 1,
            ],
            [
                'id' => 16,
                'name' => 'Arshad Mahmood Naz',
                'affiliation' => 'Mayo hospital Lahore',
                'city' => 'Lahore',
                'status' => 1,
            ],
            [
                'id' => 17,
                'name' => 'Asifa Saleem',
                'affiliation' => 'Chaklala Scheme 3/DHA2',
                'city' => 'Rawalpindi',
                'status' => 1,
            ],
            [
                'id' => 18,
                'name' => 'Asima Mahmood',
                'affiliation' => 'Special Education Department',
                'city' => 'Lahore',
                'status' => 1,
            ],
            [
                'id' => 19,
                'name' => 'Asma Mehboob Ghuncha',
                'affiliation' => 'Senior lecturer at Isra univer',
                'city' => 'Islamabad',
                'status' => 1,
            ],
            [
                'id' => 20,
                'name' => 'Atia yasmeen',
                'affiliation' => 'GSEC Hassanabdal',
                'city' => 'Rawalpindi',
                'status' => 1,
            ],
            [
                'id' => 21,
                'name' => 'Ayesha Bukhari',
                'affiliation' => 'Al-noor Special Children Schoo',
                'city' => 'Multan',
                'status' => 1,
            ],
            [
                'id' => 22,
                'name' => 'Faryal Naseer',
                'affiliation' => 'Institute of Medical Rehabilit',
                'city' => 'Islamabad',
                'status' => 1,
            ],
            [
                'id' => 23,
                'name' => 'Farzana Murtaza',
                'affiliation' => 'KHYBER TEACHING HOSPITAL PESHA',
                'city' => 'Peshawar',
                'status' => 1,
            ],
            [
                'id' => 24,
                'name' => 'Gulshan Ara',
                'affiliation' => 'shifa hospital islamabad',
                'city' => 'islamabad',
                'status' => 1,
            ],
            [
                'id' => 25,
                'name' => 'Hafsa Ali',
                'affiliation' => 'Lahore',
                'city' => 'kassowal',
                'status' => 1,
            ],
            [
                'id' => 26,
                'name' => 'hafsa mushtaq',
                'affiliation' => 'BASES',
                'city' => 'rawalpindi',
                'status' => 1,
            ],
            [
                'id' => 27,
                'name' => 'Hajra Bibi',
                'affiliation' => 'Gujar Khan',
                'city' => 'Gujar khan',
                'status' => 1,
            ],
            [
                'id' => 28,
                'name' => 'Hina Akbar',
                'affiliation' => 'Govt. Special Education Centre',
                'city' => 'Sheikhopora',
                'status' => 1,
            ],
            [
                'id' => 29,
                'name' => 'Hina Liaqat',
                'affiliation' => 'Govt training college for the ',
                'city' => 'Lahore',
                'status' => 1,
            ],
            [
                'id' => 30,
                'name' => 'Hina Riaz',
                'affiliation' => 'Aghosh special children school',
                'city' => 'Jhelum',
                'status' => 1,
            ],
            [
                'id' => 31,
                'name' => 'Humaira Qayyum',
                'affiliation' => 'Govt. Deaf and Defective Heari',
                'city' => 'Attock',
                'status' => 1,
            ],
            [
                'id' => 32,
                'name' => 'Humaira Shamim',
                'affiliation' => 'Riphah International Universit',
                'city' => 'Gujar Khan',
                'status' => 1,
            ],
            [
                'id' => 33,
                'name' => 'Iqra Javed',
                'affiliation' => 'Machaon Speech Therapy',
                'city' => 'Islamabad',
                'status' => 1,
            ],
            [
                'id' => 34,
                'name' => 'Irum Yasin',
                'affiliation' => 'Primal support',
                'city' => 'Islamabad',
                'status' => 1,
            ],
            [
                'id' => 35,
                'name' => 'Jamshaid Haider Malik',
                'affiliation' => 'STCICLD',
                'city' => 'Rawalpindi',
                'status' => 1,
            ],
            [
                'id' => 36,
                'name' => 'Kamran Hussain',
                'affiliation' => 'Shifa international hospital I',
                'city' => 'Islamabad',
                'status' => 1,
            ],
            [
                'id' => 37,
                'name' => 'Karishma Sania',
                'affiliation' => 'Karishma clinic Gujrat /doctor',
                'city' => 'Gujrat',
                'status' => 1,
            ],
            [
                'id' => 38,
                'name' => 'Mahwish Zafar',
                'affiliation' => 'Shifa International hospital I',
                'city' => 'Rawalpindi',
                'status' => 1,
            ],
            [
                'id' => 39,
                'name' => 'Maria',
                'affiliation' => 'Shifa international hospital I',
                'city' => 'Wah cantt',
                'status' => 1,
            ],
            [
                'id' => 40,
                'name' => 'Maria Khan',
                'affiliation' => 'Mind professionals',
                'city' => 'Lahore',
                'status' => 1,
            ],
            [
                'id' => 41,
                'name' => 'Maria Saeed',
                'affiliation' => 'Shifa international hospital',
                'city' => 'Wah cantt',
                'status' => 1,
            ],
            [
                'id' => 42,
                'name' => 'Maria Sheikh',
                'affiliation' => 'Govt deaf and defective hearin',
                'city' => 'Lahore',
                'status' => 1,
            ],
            [
                'id' => 43,
                'name' => 'Maroof khan',
                'affiliation' => 'Dow University Karachi',
                'city' => 'Karachi',
                'status' => 1,
            ],
            [
                'id' => 44,
                'name' => 'Maryam Arif',
                'affiliation' => 'Shifa International hospital',
                'city' => 'Islamabad',
                'status' => 1,
            ],
            [
                'id' => 45,
                'name' => 'Maryam nadir kiyani',
                'affiliation' => 'RIPHAH UNIVERSITY',
                'city' => 'Islamabad',
                'status' => 1,
            ],
            [
                'id' => 46,
                'name' => 'Maryiam Gul',
                'affiliation' => 'Inspire-Education The Bridge S',
                'city' => 'Rawalpindi, Islamabad',
                'status' => 1,
            ],
            [
                'id' => 47,
                'name' => 'Moazzama Riaz',
                'affiliation' => 'Behavioral and special educati',
                'city' => 'Rawalpindi',
                'status' => 1,
            ],
            [
                'id' => 48,
                'name' => 'Muhammad ahmed',
                'affiliation' => 'Nur international university l',
                'city' => 'Lahore',
                'status' => 1,
            ],
            [
                'id' => 49,
                'name' => 'Muhammad Bilal Tahir',
                'affiliation' => 'Govt.Special Edu. Centre Tehsi',
                'city' => 'Khushab',
                'status' => 1,
            ],
            [
                'id' => 50,
                'name' => 'Mujeeb Akbar',
                'affiliation' => 'Gulberg',
                'city' => 'Lahore',
                'status' => 1,
            ],
            [
                'id' => 51,
                'name' => 'Nadia Asad',
                'affiliation' => 'Izzat ali sha hospital and PLG',
                'city' => 'Wah cantt',
                'status' => 1,
            ],
            [
                'id' => 52,
                'name' => 'Nausheen Mushtaq',
                'affiliation' => 'Islamabad',
                'city' => 'Islamabad',
                'status' => 1,
            ],
            [
                'id' => 53,
                'name' => 'NAZIA MUMTAZ',
                'affiliation' => 'HoD Department of Speech Langu',
                'city' => 'ISLAMABAD',
                'status' => 1,
            ],
            [
                'id' => 54,
                'name' => 'Nazma Saeed',
                'affiliation' => 'Bolta Pakistan',
                'city' => 'Gujrat',
                'status' => 1,
            ],
            [
                'id' => 55,
                'name' => 'Nida Zahid',
                'affiliation' => 'Primal Support',
                'city' => 'Islamabad',
                'status' => 1,
            ],
            [
                'id' => 56,
                'name' => 'Rabia Mansoor',
                'affiliation' => 'Isra institute of rehabilitati',
                'city' => 'Islamabad',
                'status' => 1,
            ],
            [
                'id' => 57,
                'name' => 'Rashida Latif Akbari',
                'affiliation' => 'Govt. Training college for tea',
                'city' => 'Lahore',
                'status' => 1,
            ],
            [
                'id' => 58,
                'name' => 'Rimsha shakeel',
                'affiliation' => 'Afirm',
                'city' => 'Rawalpindi',
                'status' => 1,
            ],
            [
                'id' => 59,
                'name' => 'Sadaf Afreen',
                'affiliation' => 'Soch Psychological Clinics',
                'city' => 'Rawalpindi',
                'status' => 1,
            ],
            [
                'id' => 60,
                'name' => 'Sadaf Noveen',
                'affiliation' => 'National Institute of Rehabili',
                'city' => 'Islamabad',
                'status' => 1,
            ],
            [
                'id' => 61,
                'name' => 'Sadaf Noveen',
                'affiliation' => 'National Institute of Rehabili',
                'city' => 'Islamabad',
                'status' => 1,
            ],
            [
                'id' => 62,
                'name' => 'Safia Shaheen',
                'affiliation' => 'Govt deaf and defective school',
                'city' => 'Islamabad',
                'status' => 1,
            ],
            [
                'id' => 63,
                'name' => 'Sannia shafique',
                'affiliation' => 'IMR Islamabad',
                'city' => 'Islamabad',
                'status' => 1,
            ],
            [
                'id' => 64,
                'name' => 'sarah majeed',
                'affiliation' => 'GHSS of S.E for H.I sahiwal \nR',
                'city' => 'sahiwal',
                'status' => 1,
            ],
            [
                'id' => 65,
                'name' => 'Shabnam Imran',
                'affiliation' => 'Special children College Naval',
                'city' => 'Islamabad',
                'status' => 1,
            ],
            [
                'id' => 66,
                'name' => 'Shahbaz ahmad',
                'affiliation' => 'Doctor hospital Lahore',
                'city' => 'Lahore',
                'status' => 1,
            ],
            [
                'id' => 67,
                'name' => 'Sofia Raheel',
                'affiliation' => 'E11/1, Islamabad',
                'city' => 'Islamabad',
                'status' => 1,
            ],
            [
                'id' => 68,
                'name' => 'SUMERA BIBI',
                'affiliation' => 'Speech and language therapy ce',
                'city' => 'Bhara kahu Islamabad',
                'status' => 1,
            ],
            [
                'id' => 69,
                'name' => 'Syeda Farwa Batool Naqvi',
                'affiliation' => 'Green meadows remedial school ',
                'city' => 'Islamabad',
                'status' => 1,
            ],
            [
                'id' => 70,
                'name' => 'Tariq shah',
                'affiliation' => 'Army Special Education Academy',
                'city' => 'Rawalpindi',
                'status' => 1,
            ],
            [
                'id' => 71,
                'name' => 'Tehreem Khan',
                'affiliation' => 'BASES and private practice',
                'city' => 'Islamabad',
                'status' => 1,
            ],
            [
                'id' => 72,
                'name' => 'Wajiha ibrahim',
                'affiliation' => 'Shifa International hospital',
                'city' => 'Rawalpindi',
                'status' => 1,
            ],
            [
                'id' => 73,
                'name' => 'Yasmin Naqvi',
                'affiliation' => 'Kulsoom Internation Hospital, ',
                'city' => 'Rawalpindi Cantt.',
                'status' => 1,
            ],
            [
                'id' => 74,
                'name' => 'Zartashia Sabeen',
                'affiliation' => 'Special Education',
                'city' => 'QUETTA',
                'status' => 1,
            ],
            [
                'id' => 75,
                'name' => 'Sehrish Hanif',
                'affiliation' => 'Shifa international hospital I',
                'city' => 'Islamabad',
                'status' => 1,
            ],
            [
                'id' => 76,
                'name' => 'Nazia Firdous',
                'affiliation' => 'Tarar hospital, cheema chok, m',
                'city' => 'Mandibahauddin',
                'status' => 1,
            ],
        ];
            
        

        foreach($data as $entery){
            RegMemebers::create([
                'id'=>$entery['id'],
                'name'=> $entery['name'],
                'affiliation'=> $entery['affiliation'],
                'city' => $entery['city'],
                'status' => $entery['status'],
            ]);
        }
    }
}