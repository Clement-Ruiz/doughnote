<?php

use Illuminate\Database\Seeder;


class CreationUtilisateur extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('users')->truncate();


        DB::table('users')->insert([
            'nom' => "Aguer",
            'prenom' => 'Julien',
            'login' => "julienA",
            'email' => 'julien.aquer@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Bagneres",
            'prenom' => 'Raphael',
            'login' => "raphaelB",
            'email' => 'raphael.bagneres-pedeboscq@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Baudou",
            'prenom' => 'Thomas',
            'login' => "thomasb",
            'email' => 'thomas.baudou@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Berque",
            'prenom' => 'Beila',
            'login' => "leilaB",
            'email' => 'leila.berque@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Biron",
            'prenom' => 'Nolann',
            'login' => "nolannB",
            'email' => 'nolann.biron@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Bordas",
            'prenom' => 'Pierre',
            'login' => "pierreB",
            'email' => 'pierre.bordas@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Bouchou",
            'prenom' => 'Michel',
            'login' => "michelB",
            'email' => 'michel.bouchou@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Bourges",
            'prenom' => 'Pierre',
            'login' => "pierreB",
            'email' => 'pierre.bourges@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Bouteiller",
            'prenom' => 'Aurelien',
            'login' => "aurelienB",
            'email' => 'aurelien.bouteiller@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Boutet",
            'prenom' => 'Loanne',
            'login' => "loanneB",
            'email' => 'loanne.boutet@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Broustaut",
            'prenom' => 'Alexis',
            'login' => "alexisB",
            'email' => 'alexis.broustaut@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Chapeau",
            'prenom' => 'Stephane',
            'login' => "stephaneC",
            'email' => 'stephane.chapeau@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Courbin",
            'prenom' => 'Quentin',
            'login' => "quentinC",
            'email' => 'quentin.courbin@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Coutant",
            'prenom' => 'Alex',
            'login' => "alexC",
            'email' => 'alex.coutant@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Cransac",
            'prenom' => 'Florian',
            'login' => "florianC",
            'email' => 'florian.cransac@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Cuvelier",
            'prenom' => 'Louis',
            'login' => "louisC",
            'email' => 'louis.cuvelier@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Denjean",
            'prenom' => 'Axel',
            'login' => "axelD",
            'email' => 'axel.denjean@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Descoins",
            'prenom' => 'Mikael',
            'login' => "mikaelD",
            'email' => 'mikael.descoins@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Estival",
            'prenom' => 'Benoit',
            'login' => "benoitE",
            'email' => 'benoit.estival@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Etoughe",
            'prenom' => 'Anthony',
            'login' => "anthonyE",
            'email' => 'anthony.etoughe@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Foucaud",
            'prenom' => 'Josue',
            'login' => "josueF",
            'email' => 'josue.foucaud@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Gbogbohoundada",
            'prenom' => 'Olivier',
            'login' => "olivierG",
            'email' => 'olivier.gbogbohoundada@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Huet de froberville",
            'prenom' => 'Aymeric',
            'login' => "aymericH",
            'email' => 'aymeric.huetdefroberville@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Landais",
            'prenom' => 'David',
            'login' => "davidL",
            'email' => 'david.landais@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Lauga",
            'prenom' => 'Nathan',
            'login' => "nathanL",
            'email' => 'nathan.lauga@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Lemzaoueq",
            'prenom' => 'Nathan',
            'login' => "nabilL",
            'email' => 'nabil.lemzaoueq@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Leveque",
            'prenom' => 'Louis',
            'login' => "louisL",
            'email' => 'louis.leveque@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Lhote",
            'prenom' => 'Esteban',
            'login' => "estebanL",
            'email' => 'esteban.lhote@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Lummau",
            'prenom' => 'Jules',
            'login' => "julesL",
            'email' => 'jules.lummau@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Maurin",
            'prenom' => 'Thomas',
            'login' => "thomasM",
            'email' => 'thomas.maurin@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Mestreau",
            'prenom' => 'Erwan',
            'login' => "erwanM",
            'email' => 'erwan.mestreau@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Monnier",
            'prenom' => 'Logann',
            'login' => "logannM",
            'email' => 'logann.monnier@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Nay",
            'prenom' => 'Ludovic',
            'login' => "ludovicN",
            'email' => 'ludovic.nay@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Payet",
            'prenom' => 'Quentin',
            'login' => "quentinP",
            'email' => 'quentin.payet@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Persch",
            'prenom' => 'Jules',
            'login' => "julesP",
            'email' => 'jules.persch@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Pessiot",
            'prenom' => 'Gregoire',
            'login' => "gregoireP",
            'email' => 'gregoire.pessiot@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Priolot",
            'prenom' => 'Marc',
            'login' => "marcP",
            'email' => 'marc.priolot@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Provoost Donadeo",
            'prenom' => 'Joanna',
            'login' => "joannaP",
            'email' => 'joanna.provoostdonadeo@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Ruiz",
            'prenom' => 'Clement',
            'login' => "clementR",
            'email' => 'clement.ruiz@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Thery",
            'prenom' => 'Adrien',
            'login' => "adrienT",
            'email' => 'adrien.thery@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Tricaud",
            'prenom' => 'Alexandre',
            'login' => "alexandreT",
            'email' => 'alexandre.tricaud@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Valleau",
            'prenom' => 'Elien',
            'login' => "elienV",
            'email' => 'elien.valleau@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Victoras",
            'prenom' => 'Nicolas',
            'login' => "nicolasV",
            'email' => 'nicolas.victoras@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);
    }
}
