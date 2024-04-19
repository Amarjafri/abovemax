<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;



class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::all();
        return view('admin.companies.index', compact('companies'));
    }

    public function create()
    {
        return view('admin.companies.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'website' => 'nullable|url',
            'logo' => 'nullable|image|mimes:jpeg,jpg,png|max:2048', // Adding validation for logo
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $path = "profiles/default.png"; // Set default path here
        if ($request->hasFile('logo') && $request->file('logo')->isValid()) {
            $file = $request->file('logo');
            $publicPath = public_path('logo/');
            if (!File::exists($publicPath)) {
                File::makeDirectory($publicPath, 0755, true); // Ensure directory exists
            }
            $fileName = Str::random(20) . '.' . $file->getClientOriginalExtension();
            $image = Image::make($file)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $image->save($publicPath . $fileName); // Save the image
            $path = 'logo/' . $fileName; // Update path to the new logo
        }

        Company::create([
            'name' => $request->name,
            'email' => $request->email,
            'website' => $request->website,
            'logo' => $path,
        ]);

        return redirect()->route('admin.companies.index')->with('success', 'Company created successfully.');
    }


    public function show(Company $company)
    {
        return view('admin.companies.show', compact('company'));
    }

    public function edit(Company $company)
    {
        return view('admin.companies.edit', compact('company'));
    }

    public function update(Request $request, Company $company)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'logo' => 'nullable|image|dimensions:min_width=100,min_height=100',
            'website' => 'nullable|url'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($request->hasFile('logo') && $request->file('logo')->isValid()) {
            $file = $request->file('logo');
            $publicPath = public_path('logo/');
            if (!File::exists($publicPath)) {
                File::makeDirectory($publicPath, 0755, true); // Ensure directory exists
            }
            $fileName = Str::random(20) . '.' . $file->getClientOriginalExtension();
            $image = Image::make($file)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $image->save($publicPath . $fileName); // Save the image
            $path = 'logo/' . $fileName; // Update path to the new logo
        } else {
            $path = $company->logo; // Use existing path if new logo is not uploaded
        }

        // Use the model instance passed to update the company details
        $company->update([
            'name' => $request->name,
            'email' => $request->email,
            'website' => $request->website,
            'logo' => $path,
        ]);

        return redirect()->route('admin.companies.index')->with('success', 'Company updated successfully.');
    }


    public function destroy(Company $company)
    {
        $company->delete();
        return redirect()->route('admin.companies.index')->with('success', 'Company deleted successfully.');
    }
}
