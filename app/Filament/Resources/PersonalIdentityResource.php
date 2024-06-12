<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\PersonalIdentity;
use Filament\Resources\Resource;
use Illuminate\Http\UploadedFile;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PersonalIdentityResource\Pages;
use App\Filament\Resources\PersonalIdentityResource\RelationManagers;

class PersonalIdentityResource extends Resource
{
    protected static ?string $model = PersonalIdentity::class;

    protected static ?string $navigationIcon = 'heroicon-o-identification';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('users_id'),
                TextInput::make('agama'),
                TextInput::make('alamat'),
                TextInput::make('berlaku_hingga'),
                TextInput::make('golongan_darah'),
                TextInput::make('jenis_kelamin'),
                TextInput::make('kecamatan'),
                TextInput::make('kelurahan_desa'),
                TextInput::make('kewarganegaraan'),
                TextInput::make('kota_kabupaten'),
                TextInput::make('nama_ktp'),
                TextInput::make('nik'),
                TextInput::make('pekerjaan'),
                TextInput::make('provinsi'),
                TextInput::make('rt_rw'),
                TextInput::make('status_perkawinan'),
                TextInput::make('tanggal_lahir'),
                FileUpload::make('ktp_image_file')->image(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('users_id')->sortable()->searchable(),
                TextColumn::make('user.name'),
                TextColumn::make('agama'),
                TextColumn::make('alamat'),
                TextColumn::make('berlaku_hingga'),
                TextColumn::make('golongan_darah'),
                TextColumn::make('jenis_kelamin'),
                TextColumn::make('kecamatan'),
                TextColumn::make('kelurahan_desa'),
                TextColumn::make('kota_kabupaten'),
                TextColumn::make('kewarganegaraan'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        if (isset($data['ktp_image_file']) && $data['ktp_image_file'] instanceof UploadedFile) {
            $data['ktp_image_file'] = $data['ktp_image_file']->store('ktp_images', 'public');
        }

        return $data;
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPersonalIdentities::route('/'),
            'create' => Pages\CreatePersonalIdentity::route('/create'),
            'edit' => Pages\EditPersonalIdentity::route('/{record}/edit'),
        ];
    }
}
