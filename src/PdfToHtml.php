<?php

namespace rodrigoq\pdftohtml;

class PdfToHtml
{
	const BIN = 'pdftohtml';

	public static function GetBin() : string
	{
		return self::BIN;
	}

	public static function GetBinFullPath() : string
	{
		return self::GetPath() . '/' . self::BIN;
	}

	public static function GetPath() : string
	{
		return realpath(__DIR__ . '/../bin');
	}
}

