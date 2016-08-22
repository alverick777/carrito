<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
        	'imagePath' => 'img/harry.jpg',
        	'title' => 'Harry Potter y la Piedra Filosofal',
        	'description' => 'Harry Potter y la piedra filosofal es el primer libro de los siete acerca del joven mago Harry Potter, escritos por J.K. Rowling. Salió a la venta el 30 de junio de 1997, y se hizo una película basada en el mismo en 2001.',
        	'price' => 12
        ]);

        $product->save();

        $product = new \App\Product([
        	'imagePath' => 'img/fellowship.jpg',
        	'title' => 'The Fellowship of the Ring',
        	'description' => 'La Comunidad del Anillo (título original en inglés: The Fellowship of the Ring) es el primero de los tres volúmenes que forman la novela El Señor de los Anillos, secuela de El hobbit, del escritor británico J. R. R. Tolkien. La obra fue escrita para ser publicada en un solo tomo, pero debido a su longitud y coste, la editorial Allen & Unwin decidió dividirla.4 Fue publicada el 29 de julio de 1954, año en el cual se publicó también la segunda parte, Las dos torres, y recibió críticas variadas aunque bastante mejores de las que se esperaba el propio autor. Está dividida a su vez en dos más, los libros I y II, precedidas de un prólogo y de un escrito titulado Nota sobre los archivos de la Comarca, que no apareció hasta la segunda edición de La Comunidad del Anillo. En este último, Tolkien enumera las fuentes usadas a la hora de escribir el libro, ya que pretende dar a entender que la historia ocurrió en realidad.',
        	'price' => 15
        ]);

        $product->save();

         $product = new \App\Product([
        	'imagePath' => 'img/towers.jpg',
        	'title' => 'The Two Towers',
        	'description' => 'Las dos torres (titulado originalmente en inglés: The Two Towers) es el segundo volumen de la novela de fantasía heroica El Señor de los Anillos, del escritor británico J. R. R. Tolkien. La Comunidad del Anillo precede a este volumen, y a su vez continúa en El retorno del Rey. La versión original en inglés fue publicada en 1954; y su traducción al español fue llevada a cabo por Matilde Horne y Luis Domènech para Ediciones Minotauro5 y finalmente publicada en noviembre de 1979. La historia transcurre dentro del universo ficticio de la Tierra Media, y en ella se continúa la narración de las aventuras de los protagonistas de La Comunidad del Anillo: la muerte de Boromir, el secuestro de Merry y Pippin por los orcos de Saruman y su posterior huida, las batallas de Aragorn, Legolas y Gimli en el Oeste en contra de los ejércitos del señor oscuro y el viaje de Frodo y Sam hacia el Este, cruzando las tierras controladas por el enemigo para llegar al Monte del Destino y destruir el Anillo Único.',
        	'price' => 18
        ]);

        $product->save();

         

         $product = new \App\Product([
        	'imagePath' => 'img/king.jpg',
        	'title' => 'The Return of the King',
        	'description' => 'El retorno del Rey (titulado originalmente en inglés: The Return of the King) es el tercer volumen de la novela de fantasía heroica El Señor de los Anillos, del escritor británico J. R. R. Tolkien. Las dos torres es el volumen inmediatamente anterior a este volumen, y el primero de la serie es La Comunidad del Anillo. La versión original en inglés fue publicada en 1955; y su traducción al español fue llevada a cabo por Matilde Horne2 y Luis Domènech para Ediciones Minotauro y finalmente publicada en noviembre de 1980.',
        	'price' => 20
        ]);

        $product->save();

         $product = new \App\Product([
        	'imagePath' => 'img/i robot.jpg',
        	'title' => 'I, Robot',
        	'description' => 'Yo, Robot es una colección de relatos en los que se establecen y plantean los problemas de las tres leyes de la robótica que son un compendio fijo e imprescindible de moral aplicable a supuestos robots inteligentes. Los relatos plantean diferentes situaciones a las que tendrán que enfrentarse distintos especialistas en robótica y en las que se plantean paradojas e ingeniosos ejercicios intelectuales que indagan sobre la situación del hombre actual en el universo tecnológico. La protagonista de varias de las historias es Susan Calvin, experta en robopsicología.',
        	'price' => 10
        ]);

        $product->save();

         $product = new \App\Product([
        	'imagePath' => 'img/park.jpg',
        	'title' => 'Jurassic Park',
        	'description' => 'Un magnate multimillonario construye una reserva biológica y parque de atracciones en una isla cerca de Costa Rica. La misma cuenta con verdaderos dinosaurios, creados a través de la ingeniería genética. Para avalar la fiabilidad del Parque Jurásico y tranquilizar a sus inversores, se invita a un grupo de personas entre los que se encuentran un paleontólogo, una paleobotánica y un matemático experto en la Teoría del caos a visitar la isla.Durante el transcurso de la visita y pesar de los modernos sistemas de seguridad, el azar y las circunstancias, entre otros detonantes también analizados por dicha teoría matemática, se mezclan para desencadenar la pérdida de control del parque, quedando los visitantes a merced de esta naturaleza anacrónica y los dinosaurios que lo habitan.Juntos, todos ellos descubrirán, básicamente, que no se puede controlar a la vida (y, por lo tanto, a los dinosaurios del parque) y que, como enuncia el eslogan de la obra personificado en el personaje del matemático Ian Malcom: «la vida se abre camino» irremediablemente.',
        	'price' => 22
        ]);

        $product->save();

    }
}
