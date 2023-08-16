<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
	public function index()
	{
		$siswa = Siswa::get();

		return view('siswa.index', ['data' => $siswa]);
	}

	public function tambah()
	{

		return view('siswa.form',);
	}

	public function simpan(Request $request)
	{
		$data = [
			'nis' => $request->nis,
			'nama' => $request->nama,
			'jenis_kelamin' => $request->jenis_kelamin,
			'tempat_lahir' => $request->tempat_lahir,
			'tanggal_lahir' => $request->tanggal_lahir,
			'alamat' => $request->alamat,
		];

		Siswa::create($data);

		return redirect()->route('siswa');
	}

	public function edit($id)
	{
		$siswa= Siswa::find($id)->first();

		return view('siswa.form', ['siswa' => $siswa]);
	}

	public function update($id, Request $request)
	{
		$data = [
			'nis' => $request->nis,
			'nama' => $request->nama,
			'jenis_kelamin' => $request->jenis_kelamin,
			'tempat_lahir' => $request->tempat_lahir,
			'tanggal_lahir' => $request->tanggal_lahir,
			'alamat' => $request->alamat,
		];

		Siswa::find($id)->update($data);

		return redirect()->route('siswa');
	}

	public function hapus($id)
	{
		Siswa::find($id)->delete();

		return redirect()->route('siswa');
	}
}
