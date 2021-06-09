<?php

namespace rodrigoq\pdftohtml;

class PdfToHtml
{
	const BIN = 'pdftohtml';

	public static function GetBin() : string
	{
		self::SetX();
		return self::BIN;
	}

	public static function GetBinFullPath() : string
	{
		self::SetX();
		return realpath(self::GetPath() . '/' . self::BIN);
	}

	public static function GetPath() : string
	{
		return realpath(__DIR__ . '/../bin');
	}

	public static function setX() : void
	{
		$file = realpath(self::GetPath() . '/' . self::BIN);
		if(fileperms($file) & 0777 !== 0755)
			chmod($file, 0755);
	}
}

