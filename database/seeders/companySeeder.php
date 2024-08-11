<?php

namespace Database\Seeders;

use App\Models\company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class companySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // company::create(['name'=>'Qeema Tech', 'email'=>"Sales@qeematech.net", 'password'=>"qeematech123", 'location'=>"19 El-Shaikh Ahmed El-Sawy,AlManteqah as Sadesah,Nasr City,Cairo Governorate 4450412,Egypt ", 'overview'=>"The Qeema Tech is one of the best web design companies and mobile application programming in Egypt and the Arab world", 'logo'=>'company1.png', 'specialization_id'=>2]);
        // company::create(['name'=>'Future Software', 'email'=>"hello@future-software.co.uk", 'password'=>'FutureSoftware123', 'location'=>"Maple Court,White Waltham,Maidenhead SL6 3LW,UK", 'overview'=>"Our mission is simple, to listen, understand, determine and apply, as technologist, our talents to solving problems for our clients. A computer is a blank canvas without software, we use our creative talents to write the software thus creating the bigger picture", 'logo'=>'company2.jpg', 'specialization_id'=>2]);
        // company::create(['name'=>'Web Pioneer', 'email'=>"support@web-pioneer.com", 'password'=>"WebPioneer123", 'location'=>"14 Abd Al Razak Al Sanhouri, Abbas El-Akkad,NasrCity,Ciro Governorate 11727", 'overview'=>"The company uses the latest technologies in website design as well as mobile application design and also provides all solutions to all problems facing our customers", 'logo'=>'web-pioneer.png', 'specialization_id'=>2]);
        // company::create(['name'=>'Alexandria Electricity Distribution Company', 'email'=>"info@aedc.gov.eg", 'password'=>'AlexandriaElectricity123', 'location'=>'سيدي المتولي - العطارين - الاسكندرية','overview'=>'Alexandria Electricity Distribution Company,global leadership and excellence in sustainable electrical energy.','logo'=>'company4.jpg', 'specialization_id'=>5]);
        // company::create(['name'=>'Central Delta Electricity Production Company', 'email'=>"http://mdepc.gov.eg:2096/", 'password'=>'CentralDeltaElectricity123', 'location'=>'19 El-Shaikh Ahmed El-Sawy,AlManteqah as Sadesah,Nasr City,Cairo Governorate 4450412,Egypt', 'overview'=>'Central Delta Electricity Production Company is a leading company in the field of electrical energy production, covering about 17% of the needs of the national electricity grid', 'logo'=>'company5.gif', 'specialization_id'=>5]);
        // company::create(['name'=>'East Delta Electricity ', 'email'=>"giza_ho@yahoo.com", 'password'=>'EastDeltaElectricity123', 'location'=>"14 Abd Al Razak Al Sanhouri, Abbas El-Akkad,NasrCity,Ciro Governorate", 'overview'=>'Providing sustainable electrical energy from all sources to all customers in accordance with international standards and at competitive prices through institutional work that adopts policies of quality, optimal use of resources and preservation of the environment, based on highly efficient human and technological capabilities, and carrying out work in an ethically responsible manner in order to achieve the benefit of our customers, our workers and society','logo'=>'company6.jpg', 'specialization_id'=>5]);

        // company::create(['name'=>'Aecom', 'email'=>"support@web-pioneer.com", 'password'=>"aecom123", 'location'=>"Buenos Aires, Argentina", 'overview'=>"At AECOM, we believe infrastructure creates opportunity for everyone – uplifting communities, improving access and sustaining our planet.", 'logo'=>'aecom.jpg', 'specialization_id'=>3]);
        // company::create(['name'=>'SKIDMORE,OWINGS & MERRILL', 'email'=>"digital.editor@som.com", 'password'=>'som123', 'location'=>"Maple Court,White Waltham,Maidenhead SL6 3LW,UK", 'overview'=>"The SOM Foundation supports individuals with the highest aspirations to enhance the design of the built environment.", 'logo'=>'som.jpg', 'specialization_id'=>3]);
         company::create(['name'=>'TestFit', 'email'=>"digital.editor@som.com", 'password'=>'testfit123', 'location'=>"New York,USA", 'overview'=>"TestFit is the leading real estate feasibility platform for developers, architects, and contractors to realize the full potential of land through trusted automation. Over 650 deals are evaluated every week on the TestFit platform.", 'logo'=>'tf.png', 'specialization_id'=>3]);
         company::create(['name'=>'MCV', 'email'=>"support@web-pioneer.com", 'password'=>'mcv123', 'location'=>"Cairo, Egypt", 'overview'=>"MCV aims to be identified among the top Bus manufacturer in the world and the supplier of choice of commercial vehicles, creating new international benchmarks in this sophisticated and highly refined global industry, exceeding expectations of quality, safety, and excellence in performance.", 'logo'=>'mcv.png', 'specialization_id'=>6]);
         company::create(['name'=>'ELARABY', 'email'=>"contactus@elarabygroup.com", 'password'=>'araby123', 'location'=>"Cairo, Egypt", 'overview'=>"We are a leading provider of appliances in domestic and foreign markets. We have a long history of collaboration with major international companies, and we are committed to providing world-class quality and excellent service.", 'logo'=>'araby.jpg', 'specialization_id'=>6]);
         company::create(['name'=>'Bernhard', 'email'=>"digital.editor@som.com", 'password'=>'bernhard123', 'location'=>"1 Galleria Blvd., Suite 825 Metairie, LA 70001", 'overview'=>"Bernhard is one of the top mechanical engineering companies in the nation. With over 50 registered mechanical engineers across our firm, we offer consulting engineering for projects of any size and scale. Our expertise includes building HVAC design, controls design,campus and district energy systems, and energy conservation programs.", 'logo'=>'bernhard.png', 'specialization_id'=>6]);

//        company::create(['name'=>'JACOBS ENGINEERING GROUP', 'email'=>"JACOBSGROUP@gmail.com", 'password'=>"JACOBSENGINEERINGGROUP123", 'location'=>"Dallas,TX", 'overview'=>"Jacobs Engineering Group Inc. is an American international technical professional services firm", 'logo'=>'company13.png', 'specialization_id'=>1]);
//        company::create(['name'=>'KITTELSON & ASSOCIATES', 'email'=>"KITTELSON&ASSOCIATES@gmail.com", 'password'=>'KITTELSON&ASSOCIATES123', 'location'=>"Portland, OR", 'overview'=>"Founded in 1985, Kittelson & Associates is an established company that loves to hire graduates from Pennsylvania State University, with 10.0% of its employees having attended Pennsylvania State University.", 'logo'=>'company14.jpg', 'specialization_id'=>1]);
//        company::create(['name'=>'HNTB', 'email'=>"HNTB@gmail.com", 'password'=>"HNTB123", 'location'=>"Kansas City, MO", 'overview'=>"HNTB is a professional infrastructure design company focusing on architecture, civil engineering, and planning services. Since its founding in 1914, this American firm has grown to become a major player in the industry.", 'logo'=>'company15.jpg', 'specialization_id'=>1]);


        company::create(['name'=>'NBBJ DESIGN', 'email'=>"NBBJDESIGN@gmail.com", 'password'=>'NBBJDESIGN123', 'location'=>'New Orleans, LA','overview'=>'NBBJ is a global architecture, planning, and design firm providing services in architecture, interiors, planning and urban design, branding, consulting, landscape design, and lighting.','logo'=>'company16.jpg', 'specialization_id'=>4]);
        company::create(['name'=>'IBI GROUP', 'email'=>"NBBJDESIGN@gmail.com", 'password'=>'IBIGROUP123', 'location'=>'Scottsdale, AZ', 'overview'=>'IBI Group Inc. is a Canadian-based international professional services company consulting in the fields of architecture, engineering, planning, landscape architecture, transportation, and technology.', 'logo'=>'company17.jpg', 'specialization_id'=>4]);
        company::create(['name'=>'Sasaki', 'email'=>"Sasaki@yahoo.com", 'password'=>'Sasaki123', 'location'=>"Boston, MA", 'overview'=>'Sasaki has been around for a long time. It was founded back in 1953. This established company loves to hire graduates from Wentworth Institute of Technology, with 16.2% of its employees having attended Wentworth Institute of Technology.','logo'=>'company18.jpg', 'specialization_id'=>4]);


    }
}
