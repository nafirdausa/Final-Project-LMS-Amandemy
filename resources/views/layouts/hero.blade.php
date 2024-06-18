@extends('layouts.master')
@section('title', 'Welcome Page')

@section('content')

{{-- <div class="welcome-section flex items-center justify-evenly py-12 rounded-lg mb-8 flex-wrap">
    <div>
        <h1 class="text-6xl font-bold mb-5">Hai, Pencari Ilmu Sejati!</h1>
        <h2 class="text-6xl font-bold mb-8">Time To Grow Up 🙌</h2><br>
        <p class="text-xl mb-8">Kami siap membantu kamu dalam proses belajar dengan menyediakan <br> metode yang efektif dan efisien, sehingga kamu dapat menguasai <br> materi dengan lebih mudah dan cepat,  serta mencapai hasil <br> yang optimal dalam waktu yang lebih singkat!</p>
        <a href="{{ route('login') }}" class="bg-blue-600 text-white font-bold py-2 px-4 rounded-full hover:bg-blue-600 hover:text-white">Mulai Belajar</a>
    </div>
    <div class="welcome-image">
        <img src="{{asset('assets/images/hero.jpg')}}" alt="gambar hero" width="550" height="550">
    </div>
</div> --}}
<section>
    <div class="relative w-full h-96" style="margin-bottom: 250px;"><img class="absolute h-dvh w-full object-cover object-center shadow-2xl" src="https://cdn.pixabay.com/photo/2015/10/21/08/14/students-998989_1280.jpg" alt="nature image" />
      <div class="absolute inset-0 h-full w-full bg-black/50"></div>
      <div class="relative pt-28 text-center" >
        <h1 class="block antialiased tracking-normal font-sans font-bold leading-[1.3] text-white mb-4 text-3xl lg:text-4xl" style="font-size: 40px">Hai, Pencari Ilmu Sejati! </h1>
        <h1 class="block antialiased tracking-normal font-sans font-bold leading-[1.3] text-white mb-4 text-3xl lg:text-4xl" style="font-size: 50px">Selamat datang di ruang belajar kesayangan anda</h1>
        <p class="block antialiased font-sans text-xl font-normal leading-relaxed text-white mb-9 opacity-70">Kami siap membantu kamu dalam proses belajar dengan menyediakan <br> metode yang efektif dan efisien, sehingga kamu dapat menguasai <br> materi dengan lebih mudah dan cepat,  serta mencapai hasil <br> yang optimal dalam waktu yang lebih singkat!</p>
        <div style="margin-top:80px">
            <button class="btn">
                <a href="{{ route('login') }}" >Mulai Belajar</a>
            </button>
        </div>
      </div>
    </div>
    <div class="-mt-16 mb-8 px-8 ">
      <div class="container mx-auto">
        <div class="container-animate py-12 flex justify-center rounded-xl border border-white shadow-md shadow-black/5 saturate-200">
            <div class="py-12 mt-4">
                <div class="max-w-6xl mx-auto text-center mb-4">
                    <h2 class="text-4xl font-bold mb-4" style="font-size: 40px">Perhatian Kami adalah Pendidikan Anda</h2>
                    <p class="text-lg mb-8">Kami membantu orang membangun masa depan yang sukses dan mencapai kebebasan finansial <br> untuk melakukan apa yang mereka inginkan, dimanapun yang mereka inginkan</p>
                </div><br>
        
                <div class="max-w-6xl mx-auto grid grid-rows-3 grid-flow-col gap-8 justify-center">
                    <div class="flex flex-col items-center md:flex-row md:col-span-1 mb-8 mt-5">
                        <div class="w-full md:w-1.5/3 flex items-center justify-center">
                            <img src="{{ asset('assets/images/minat.jpg') }}" alt="Education Image 1" class="rounded-lg mb-4 md:mb-0 md:mr-4 w-full shadow-2xl" >
                        </div>
                        <div class="w-full md:w-1.5/3">
                            <h1 class="text-xl font-bold mb-4" style="font-size: 50px">Tentukan Minatmu</h1>
                            <p class="text-gray-600 ml-7" style="margin: 0px; font-size:20px">Disini kami berkomitmen untuk memberikan pendidikan terbaik bagi kalian. Mulai perjalanan belajarmu dengan menentukan minatmu sejak awal, baik itu di bidang Bahasa, IPA, atau IPS. Melalui platform pembelajaran yang disesuaikan, kamu akan mendapatkan pengalaman belajar yang efektif dan efisien untuk mempersiapkan masa depan yang gemilang.</p>
                        </div>
                    </div>
        
                    <div class="flex flex-col items-center justify-items-center justify-center md:flex-row md:col-span-1 mb-5 mt-5">
                        <div class="w-full md:w-1.5/3">
                            <h3 class="text-6xl font-bold mb-2" style="font-size: 50px">Berinovasi dan Menstimulasi Diskusi</h3>
                            <p class="text-gray-600 ml-7" style="margin: 0px; font-size:20px">Disini kamu didorong untuk berpikir kreatif dan kritis. Platform ini dirancang untuk memfasilitasi inovasi dan menstimulasi diskusi, memungkinkan kamu untuk berkolaborasi, bertukar ide, dan memecahkan masalah bersama.</p>
                        </div>
                        <div class="w-full md:w-1.5/3 flex items-center justify-center">
                            <img src="{{ asset('assets/images/inovasi.jpg') }}" alt="Education Image 2" class="rounded-lg mb-4 md:mb-0 md:mr-4 md:ml-4 0 w-full shadow-2xl">
                        </div>
                    </div>
        
                    <div class="flex flex-col items-center md:flex-row md:col-span-1 mb-5 mt-5">
                        <div class="w-full md:w-1.5/3 flex items-center justify-center">
                            <img src="{{ asset('assets/images/feedback.jpg') }}" alt="Education Image 3" class="rounded-lg mb-4 md:mb-0 md:mr-4 w-full shadow-2xl">
                        </div>
                        <div class="w-full md:w-1.5/3 justify-items-end">
                            <h3 class="text-6xl font-bold mb-2" style="font-size: 50px">Minta Bantuan dan Umpan Balik</h3>
                            <p class="text-gray-600 ml-7 " style="margin: 0px; font-size:20px">Kami memahami bahwa setiap siswa memiliki kebutuhan belajar yang unik. Disini, siswa dapat dengan mudah meminta bantuan dan mendapatkan umpan balik dari guru dan teman.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </section>
{{-- <section>
	<div class="bg-violet-500 text-white py-20">
		<div class="container mx-auto flex flex-col md:flex-row items-center my-12 md:my-24">
			<div class="flex flex-col w-full lg:w-1/3 justify-center items-start p-8">
				<h1 class="text-3xl md:text-5xl p-2 text-yellow-300 tracking-loose fw-bold">Hai, Pencari Ilmu Sejati!</h1>
				<h2 class="text-2xl md:text-3xl leading-relaxed md:leading-snug mb-2">Time To Grow Up 🙌</h2>
				<p class="text-sm md:text-base text-gray-50 mb-4">Kami siap membantu kamu dalam proses belajar dengan <br> menyediakan metode yang efektif dan efisien, sehingga kamu dapat menguasai materi dengan lebih mudah dan <br> cepat,  serta mencapai hasil yang optimal <br> dalam waktu yang lebih singkat!</p>
				<a href="{{ route('login') }}" class="bg-transparent hover:bg-yellow-300 text-yellow-300 hover:text-black rounded shadow hover:shadow-lg py-2 px-4 border border-yellow-300 hover:border-transparent">Mulai Belajar</a>
			</div>
			<div class="p-8 mt-12 mb-6 md:mb-0 md:mt-0 ml-0 md:ml-12 lg:w-2/3  justify-center">
				<div class="h-48 flex flex-wrap content-center">
					<div>
						<img class="inline-block mt-28 hidden xl:block" src="https://user-images.githubusercontent.com/54521023/116969935-c13d5b00-acd4-11eb-82b1-5ad2ff10fb76.png">
                    </div>
					<div>
						<img class="inline-block mt-24 md:mt-0 p-8 md:p-0"  src="https://th.bing.com/th/id/R.64ddcd18d958119f762d8466934c3b03?rik=hF3qrUy150IcVw&riu=http%3A%2F%2Fpsikologid.com%2Fwp-content%2Fuploads%2F2015%2F07%2Fgaya-belajar.jpg&ehk=DrLdqc4qJcl1M2BhHvg1W4yBrYRKPhUPowulLGCIB2Y%3D&risl=&pid=ImgRaw&r=0" style="width: 300px">
                    </div>
					<div>
					    <img class="inline-block mt-28 hidden lg:block" src="https://user-images.githubusercontent.com/54521023/116969939-c1d5f180-acd4-11eb-8ad4-9ab9143bdb50.png">
                    </div>
				</div>
			</div>
		</div>
	</div>
</section> --}}


    {{-- <div class="py-12 mt-4">
        <div class="max-w-6xl mx-auto text-center mb-4">
            <h2 class="text-4xl font-bold mb-4">Perhatian Kami adalah Pendidikan Anda</h2>
            <p class="text-lg mb-8">Kami membantu orang membangun masa depan yang sukses dan mencapai kebebasan finansial <br> untuk melakukan apa yang mereka inginkan, dimanapun yang mereka inginkan</p>
        </div><br>

        <div class="max-w-6xl mx-auto grid grid-rows-3 grid-flow-col gap-8 justify-center">
            <div class="flex flex-col items-center md:flex-row md:col-span-1 mb-8 mt-5">
                <div class="w-full md:w-1.5/3 flex items-center justify-center">
                    <img src="{{ asset('assets/images/minat.jpg') }}" alt="Education Image 1" class="rounded-lg mb-4 md:mb-0 md:mr-4" >
                </div>
                <div class="w-full md:w-1.5/3">
                    <h3 class="text-xl font-bold mb-2">Tentukan Minatmu</h3>
                    <p class="text-gray-600 ml-7" style="margin: 0px">Disini kami berkomitmen untuk memberikan pendidikan terbaik bagi kalian. Mulai perjalanan belajarmu dengan menentukan minatmu sejak awal, baik itu di bidang Bahasa, IPA, atau IPS. Melalui platform pembelajaran yang disesuaikan, kamu akan mendapatkan pengalaman belajar yang efektif dan efisien untuk mempersiapkan masa depan yang gemilang.</p>
                </div>
            </div>

            <div class="flex flex-col items-center justify-items-center justify-center md:flex-row md:col-span-1 mb-5 mt-5">
                <div class="w-full md:w-1.5/3">
                    <h3 class="text-xl font-bold mb-2">Berinovasi dan Menstimulasi Diskusi</h3>
                    <p class="text-gray-600 ml-7" style="margin: 0px">Disini kamu didorong untuk berpikir kreatif dan kritis. Platform ini dirancang untuk memfasilitasi inovasi dan menstimulasi diskusi, memungkinkan kamu untuk berkolaborasi, bertukar ide, dan memecahkan masalah bersama.</p>
                </div>
                <div class="w-full md:w-1.5/3 flex items-center justify-center">
                    <img src="{{ asset('assets/images/inovasi.jpg') }}" alt="Education Image 2" class="rounded-lg mb-4 md:mb-0 md:mr-4 md:ml-4 0">
                </div>
            </div>

            <div class="flex flex-col items-center md:flex-row md:col-span-1 mb-5 mt-5">
                <div class="w-full md:w-1.5/3 flex items-center justify-center">
                    <img src="{{ asset('assets/images/feedback.jpg') }}" alt="Education Image 3" class="rounded-lg mb-4 md:mb-0 md:mr-4">
                </div>
                <div class="w-full md:w-1.5/3 justify-items-end">
                    <h3 class="text-xl font-bold mb-2">Minta Bantuan dan Umpan Balik</h3>
                    <p class="text-gray-600 ml-7 " style="margin: 0px">Kami memahami bahwa setiap siswa memiliki kebutuhan belajar yang unik. Disini, siswa dapat dengan mudah meminta bantuan dan mendapatkan umpan balik dari guru dan teman.</p>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="py-12 flex align-items justify-center">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold mb-4">Karya-Karya Siswa</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
                @foreach ($portofolios as $portofolio)
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <img src="{{ asset($portofolio->gambar) }}" alt="Portofolio Image" class="rounded-lg w-full mb-4">
                        <h3 class="text-xl font-bold mb-2">{{ $portofolio->judul }}</h3>
                        <p class="text-gray-600 mb-4">{{ $portofolio->deskripsi }}</p>
                        <a href="{{ route('dashboard.siswa.portofolio') }}" class="text-blue-500 hover:text-blue-700">Selengkapnya > Lihat Portofolio</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
