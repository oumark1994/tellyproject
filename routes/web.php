<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//home
Route::get('/','App\Http\Controllers\ClientController@index');
Route::get('/batiment','App\Http\Controllers\ClientController@batiment');
Route::get('/industriel','App\Http\Controllers\ClientController@industriel');
Route::get('/commerce','App\Http\Controllers\ClientController@commerce');
Route::get('/energie','App\Http\Controllers\ClientController@energie');
Route::get('/agricultures','App\Http\Controllers\ClientController@agriculture');
Route::get('/contact','App\Http\Controllers\ClientController@contact');
Route::get('/apropros','App\Http\Controllers\ClientController@apropros');
Route::get('/projects','App\Http\Controllers\ClientController@projects');
Route::get('/detail_produit/{id}','App\Http\Controllers\ClientController@detail_produit');




Route::get('/projectbyid/{id}','App\Http\Controllers\ClientController@projectbyid');

//admin
Route::get('/dashboard','App\Http\Controllers\AdminController@index');

//slider
Route::get('/slider','App\Http\Controllers\AdminController@slider');
Route::get('/sliders','App\Http\Controllers\SliderController@index');
Route::get('/newslider','App\Http\Controllers\SliderController@newslider');
Route::post('/addslider','App\Http\Controllers\SliderController@addslider');

Route::get('/editslider/{id}','App\Http\Controllers\SliderController@editslider');
Route::post('/updateslider','App\Http\Controllers\SliderController@updateslider');
Route::get('/deleteslider/{id}','App\Http\Controllers\SliderController@deleteslider');
Route::get('/deleteslider/{id}','App\Http\Controllers\SliderController@deleteslider');
Route::get('/desactive_slider/{id}','App\Http\Controllers\SliderController@desactive_slider');
Route::get('/activate_slider/{id}','App\Http\Controllers\SliderController@active_slider');

//categorie
Route::get('/categorie','App\Http\Controllers\AdminController@categories');
Route::get('/categories','App\Http\Controllers\CategorieController@index');
Route::get('/newcategorie','App\Http\Controllers\CategorieController@newcategorie');
Route::post('/addcategorie','App\Http\Controllers\CategorieController@addcategorie');
Route::get('/editcategorie/{id}','App\Http\Controllers\CategorieController@editcategorie');
Route::post('/updatecategorie','App\Http\Controllers\CategorieController@updatecategorie');
Route::get('/deletecategorie/{id}','App\Http\Controllers\CategorieController@deletecategorie');
Route::get('/deletecategorie/{id}','App\Http\Controllers\CategorieController@deletecategorie');
//agriculture
Route::get('/agriculture','App\Http\Controllers\AgricultureController@index');
Route::get('/newagriculture','App\Http\Controllers\AgricultureController@newagriculture');
Route::post('/addagriculture','App\Http\Controllers\AgricultureController@addagriculture');
Route::get('/editagriculture/{id}','App\Http\Controllers\AgricultureController@editagriculture');
Route::post('/updateagriculture','App\Http\Controllers\AgricultureController@updateagriculture');
Route::get('/deleteagriculture/{id}','App\Http\Controllers\AgricultureController@deleteagriculture');
//message

//energie
Route::get('/energies','App\Http\Controllers\EnergieController@index');
Route::get('/newenergie','App\Http\Controllers\EnergieController@newenergie');
Route::post('/addenergie','App\Http\Controllers\EnergieController@addenergie');
Route::get('/editenergie/{id}','App\Http\Controllers\EnergieController@editenergie');
Route::post('/updateenergie','App\Http\Controllers\EnergieController@updateenergie');
Route::get('/deleteenergie/{id}','App\Http\Controllers\EnergieController@deleteenergie');

//energie
Route::get('/mylogin','App\Http\Controllers\LoginController@login');
Route::get('/myregister','App\Http\Controllers\LoginController@register');
Route::post('/signin','App\Http\Controllers\LoginController@signin');
Route::post('/signup','App\Http\Controllers\LoginController@signup');
Route::get('/logout','App\Http\Controllers\LoginController@logout');

// Route::get('/portfolio','App\Http\Controllers\AdminController@portfolios');
Route::get('/portfolios','App\Http\Controllers\PortfolioController@index');
Route::get('/newportfolio','App\Http\Controllers\PortfolioController@newportfolio');
Route::post('/addportfolio','App\Http\Controllers\PortfolioController@addportfolio');
Route::get('/editportfolio/{id}','App\Http\Controllers\PortfolioController@editportfolio');
Route::post('/updateportfolio','App\Http\Controllers\PortfolioController@updateportfolio');
Route::get('/deleteportfolio/{id}','App\Http\Controllers\PortfolioController@deleteportfolio');

Route::get('/desactive_categorie/{id}','App\Http\Controllers\categorieController@desactive_categorie');
Route::get('/activate_categorie/{id}','App\Http\Controllers\categorieController@activate_categorie');
//abouts
Route::get('/abouts','App\Http\Controllers\AboutController@index');
Route::get('/newabout','App\Http\Controllers\AboutController@newabout');
Route::post('/addabout','App\Http\Controllers\AboutController@addabout');

Route::get('/editabout/{id}','App\Http\Controllers\AboutController@editabout');
Route::post('/updateabout','App\Http\Controllers\AboutController@updateabout');
Route::get('/deleteabout/{id}','App\Http\Controllers\AboutController@deleteabout');


//project
Route::get('/project','App\Http\Controllers\PortfolioController@index');

Route::get('/addproject','App\Http\Controllers\PortfolioController@addproject');
Route::post('/newproject','App\Http\Controllers\PortfolioController@newproject');
Route::get('/editproject/{id}','App\Http\Controllers\PortfolioController@editproject');
Route::post('/updateproject/{id}','App\Http\Controllers\PortfolioController@updateproject');
Route::get('/deleteproject/{id}','App\Http\Controllers\PortfolioController@deleteproject');
//service
Route::get('/service','App\Http\Controllers\ServiceController@index');
Route::post('/newservice','App\Http\Controllers\ServiceController@newservice');
Route::get('/addservice','App\Http\Controllers\ServiceController@addservice');
Route::get('/editservice/{id}','App\Http\Controllers\ServiceController@editservice');
Route::post('/updateservice/{id}','App\Http\Controllers\ServiceController@updateservice');
Route::get('/deleteservice/{id}','App\Http\Controllers\ServiceController@deleteservice');
//service
Route::get('/produits','App\Http\Controllers\ProductController@index');
Route::get('/newproduit','App\Http\Controllers\ProductController@newproduit');
Route::post('/addproduit','App\Http\Controllers\ProductController@addproduit');
Route::get('/editproduit/{id}','App\Http\Controllers\ProductController@editproduit');
Route::post('/updateproduit','App\Http\Controllers\ProductController@updateproduit');
Route::get('/deleteproduit/{id}','App\Http\Controllers\ProductController@deleteproduit');
//electricite

Route::get('/electricite','App\Http\Controllers\ElectriciteController@index');
Route::get('/newelectricite','App\Http\Controllers\ElectriciteController@newelectricite');
Route::post('/addelectricite','App\Http\Controllers\ElectriciteController@addelectricite');
Route::get('/electricite_batiment','App\Http\Controllers\ElectriciteController@electricite_batiment');
Route::get('/electricite_industriel','App\Http\Controllers\ElectriciteController@electricite_industriel');
Route::get('/editelectricite','App\Http\Controllers\ElectriciteController@editelectricite');
Route::get('/editelectricite/{id}','App\Http\Controllers\ElectriciteController@editelectricite');
Route::post('/updateelectricite','App\Http\Controllers\ElectriciteController@updateelectricite');

Route::get('/deleteelectricite/{id}','App\Http\Controllers\ElectriciteController@deleteelectricite');

Route::get('/addservice','App\Http\Controllers\ServiceController@addservice');
Route::get('/editservice/{id}','App\Http\Controllers\ServiceController@editservice');
Route::post('/updateservice/{id}','App\Http\Controllers\ServiceController@updateservice');
Route::get('/deleteservice/{id}','App\Http\Controllers\ServiceController@deleteservice');
//messages
Route::get('/messages','App\Http\Controllers\MessageController@index');
Route::post('/addmessage','App\Http\Controllers\MessageController@addmessage');
Route::get('/deletemessage/{id}','App\Http\Controllers\MessageController@deletemessage');

//skill
Route::get('/skills','App\Http\Controllers\SkillController@index');
Route::post('/newskill','App\Http\Controllers\SkillController@newskill');
Route::get('/addskill','App\Http\Controllers\SkillController@addskill');
Route::get('/editskill/{id}','App\Http\Controllers\SkillController@editskill');
Route::post('/updateskill/{id}','App\Http\Controllers\SkillController@updateskill');
Route::get('/deleteskill/{id}','App\Http\Controllers\SkillController@deleteskill');

//testimonal
Route::get('/testimonials','App\Http\Controllers\TestimonialController@index');
Route::post('/newtestimonial','App\Http\Controllers\TestimonialController@newtestimonial');
Route::get('/addtestimonial','App\Http\Controllers\TestimonialController@addtestimonial');
Route::get('/edittestimonial/{id}','App\Http\Controllers\TestimonialController@edittestimonial');
Route::post('/updatetestimonial','App\Http\Controllers\TestimonialController@updatetestimonial');
Route::get('/deletetestimonial/{id}','App\Http\Controllers\TestimonialController@deletetestimonial');
//partenaire
Route::get('/partenaires','App\Http\Controllers\PartenaireController@index');
Route::get('/newpartenaire','App\Http\Controllers\PartenaireController@newpartenaire');
Route::post('/addpartenaire','App\Http\Controllers\PartenaireController@addpartenaire');
Route::get('/editpartenaire/{id}','App\Http\Controllers\PartenaireController@editpartenaire');
Route::post('/updatepartenaire','App\Http\Controllers\PartenaireController@updatepartenaire');
Route::get('/deletepartenaire/{id}','App\Http\Controllers\PartenaireController@deletepartenaire');
Route::get('/desactive_partenaire/{id}','App\Http\Controllers\PartenaireController@desactive_partenaire');
Route::get('/activate_partenaire/{id}','App\Http\Controllers\PartenaireController@activate_partenaire');
//framework
Route::get('/frameworks','App\Http\Controllers\FrameworkController@index');
Route::post('/newframework','App\Http\Controllers\FrameworkController@newframework');
Route::get('/addframework','App\Http\Controllers\FrameworkController@addframework');
Route::get('/editframework/{id}','App\Http\Controllers\FrameworkController@editframework');
Route::post('/updateframework/{id}','App\Http\Controllers\FrameworkController@updateframework');
Route::get('/deleteframework/{id}','App\Http\Controllers\FrameworkController@deleteframework');

//about
Route::get('/about','App\Http\Controllers\AboutController@index');
Route::post('/newabout','App\Http\Controllers\AboutController@newabout');
Route::get('/addabout','App\Http\Controllers\AboutController@addabout');
Route::get('/editabout/{id}','App\Http\Controllers\AboutController@editabout');
Route::post('/updateabout/{id}','App\Http\Controllers\AboutController@updateabout');
Route::get('/deleteabout/{id}','App\Http\Controllers\AboutController@deleteabout');


//feature
Route::get('/features','App\Http\Controllers\FeatureController@index');
Route::post('/newfeature','App\Http\Controllers\FeatureController@newfeature');
Route::get('/addfeature','App\Http\Controllers\FeatureController@addfeature');
Route::get('/editfeature/{id}','App\Http\Controllers\FeatureController@editfeature');
Route::post('/updatefeature/{id}','App\Http\Controllers\FeatureController@updatefeature');
Route::get('/deletefeature/{id}','App\Http\Controllers\FeatureController@deletefeature');

//links
Route::get('/sociallinks','App\Http\Controllers\SociallinkController@index');
Route::post('/newlink','App\Http\Controllers\SociallinkController@newlink');
Route::get('/addlink','App\Http\Controllers\SociallinkController@addlink');
Route::get('/editlink/{id}','App\Http\Controllers\SociallinkController@editlink');
Route::post('/updatelink/{id}','App\Http\Controllers\SociallinkController@updatelink');
Route::get('/deletelink/{id}','App\Http\Controllers\SociallinkController@deletelink');
Route::get('/download',function(){
    $file = public_path()."/cv.pdf";
    $headers = array(
        'Content-Type: application/pdf',
    );
    return Response::download($file,"Mycv.pdf",$headers);
});










Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
