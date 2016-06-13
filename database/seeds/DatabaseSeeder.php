<?php

use App\Invoices;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserTableSeeder::class);
        $faker=Faker\Factory::create();
        $this->seedInvoices($faker);
        $this->seedUserTable();
    }

    private function seedInvoices($faker){
        foreach (range(0,100) as $number);{
            $invoice=new Invoices();

            $invoice->name=$faker->sentence;
            $invoice->totalAmmount = $faker->randomNumber;
            $invoice->save();
        }
    }

    public function seedUserTable()
    {
        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin@mail.com';
        $user->password =  bcrypt(env('PASSWORD_ADMIN', '1234'));
        $user->save();
    }
    
}
