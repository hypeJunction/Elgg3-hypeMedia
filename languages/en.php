<?php

return [
	'collection:object:media_album:all' => 'Media',

	'item:object:media_album' => 'Album',
	'collection:object:media_album' => 'Albums',
	'add:object:media_album' => 'New Album',
	'edit:object:media_album' => 'Edit Album',
	'upload:object:media_album' => 'Add Media',

	'item:object:media_file' => 'Media File',
	'collection:object:media_file' => 'Media Files',
	'add:object:media_file' => 'Upload File',
	'edit:object:media_file' => 'Edit File',

	'item:object:media_import' => 'Media Resource',
	'collection:object:media_import' => 'Media Resources',
	'add:object:media_import' => 'Import Resource',
	'edit:object:media_import' => 'Edit Resource',

	'collection:object:media_album:no_results' => 'There are no albums to display',
	'collection:media:album:no_results' => 'There are no media items to display',

	'field:object:media_album:description' => 'Description',
	'field:object:media_file:description' => 'Description',
	'field:object:media_import:description' => 'Description',
	'field:object:media_album:uploads' => 'Upload files',
	'field:object:media_album:uploads:help' => 'Select media files to upload',
	'field:object:media_album:imports' => 'Import',
	'field:object:media_album:imports:help' => 'Enter URLs to import the media from. One per line.',
	'field:object:media_file:albums' => 'Albums',

	'river:create:object:media_album' => '%s created a new album %s',

	'media:import:error' => 'Unable to import media from %s',

	'groups:tool:media' => 'Enable group media albums',

	'widgets:media_albums:name' => 'Media Albums',
	'widgets:media_albums:description' => 'Displays media albums',

	'widgets:media_objects:name' => 'Media',
	'widgets:media_objects:description' => 'Displays photos and videos from media albums',

	'media:settings:ffmpeg_bin' => 'FFMpeg executable path',
	'media:settings:ffmpeg_bin:help' => 'Video conversion to web compatible formats requires ffmpeg installed on your server. It is usually located at /usr/bin/ffmpeg, but the path may vary depending on your server configuration. You can find detailed documentation and installation instructins at https://ffmpeg.org/',

	'media:exif' => 'EXIF',
	'exif.Model' => 'Camera',
	'exif.LensInfo' => 'Lens Info',
	'exif.LensModel' => 'Lens Model',
	'exif.LensSerialNumber' => 'Lens Serial Number',
	'exif.Copyright' => 'Copyright',
	'exif.ImageDescription' => 'Description',
	'exif.Software' => 'Software',
	'exif.ModifyDate' => 'Date and Time (Modified)',
	'exif.XResolution' => 'X-Resolution',
	'exif.YResolution' => 'Y-Resolution',
	'exif.ResolutionUnit' => 'Resolution Unit',
	'exif.ResolutionUnit.1' => 'No absolute unit of measurement',
	'exif.ResolutionUnit.2' => 'Inch',
	'exif.ResolutionUnit.3' => 'Centimeter',
	'exif.ExposureTime' => 'Exposure (s)',
	'exif.FNumber' => 'F-Number',
	'exif.ApertureValue' => 'Aperture Value',
	'exif.BrightnessValue' => 'Brightness',
	'exif.ExposureBiasValue' => 'Exposure Bias',
	'exif.MaxApertureValue' => 'Max Aperture Value',
	'exif.SubjectDistance' => 'Subject Distance (m)',
	'exif.SubjectArea' => 'Subject Area',
	'exif.SubjectLocation' => 'Subject Location',
	'exif.ExposureProgram' => 'Exposure Program',
	'exif.ExposureProgram.0' => 'Not defined',
	'exif.ExposureProgram.1' => 'Manual',
	'exif.ExposureProgram.2' => 'Normal program',
	'exif.ExposureProgram.3' => 'Aperture priority',
	'exif.ExposureProgram.4' => 'Shutter priority',
	'exif.ExposureProgram.5' => 'Creative program (biased toward depth of field)',
	'exif.ExposureProgram.6' => 'Action program (biased toward fast shutter speed)',
	'exif.ExposureProgram.7' => 'Portrait mode (for closeup photos with the background out of focus)',
	'exif.ExposureProgram.8' => 'Landscape mode (for landscape photos with the background in focus)',
	'exif.ComponentsConfiguration' => 'Components Configuration',
	'exif.ComponentsConfiguration.0' => 'Does not exist',
	'exif.ComponentsConfiguration.1' => 'Y',
	'exif.ComponentsConfiguration.2' => 'Cb',
	'exif.ComponentsConfiguration.3' => 'Cr',
	'exif.ComponentsConfiguration.4' => 'R',
	'exif.ComponentsConfiguration.5' => 'G',
	'exif.ComponentsConfiguration.6' => 'B',
	'exif.ComponentsConfiguration.Other' => 'Other',
	'exif.MeteringMode' => 'Metering Mode',
	'exif.MeteringMode.0' => 'Unknown',
	'exif.MeteringMode.1' => 'Average',
	'exif.MeteringMode.2' => 'CenterWeightedAverage',
	'exif.MeteringMode.3' => 'Spot',
	'exif.MeteringMode.4' => 'MultiSpot',
	'exif.MeteringMode.5' => 'Pattern',
	'exif.MeteringMode.6' => 'Partial',
	'exif.MeteringMode.255' => 'Other',
	'exif.LightSource' => 'Light Source',
	'exif.LightSource.0' => 'Unknown',
	'exif.LightSource.1' => 'Daylight',
	'exif.LightSource.2' => 'Fluorescent',
	'exif.LightSource.3' => 'Tungsten (incandescent light)',
	'exif.LightSource.4' => 'Flash',
	'exif.LightSource.9' => 'Fine weather',
	'exif.LightSource.10' => 'Cloudy weather',
	'exif.LightSource.11' => 'Shade',
	'exif.LightSource.12' => 'Daylight fluorescent (D 5700 - 7100K)',
	'exif.LightSource.13' => 'Day white fluorescent (N 4600 - 5400K)',
	'exif.LightSource.14' => 'Cool white fluorescent (W 3900 - 4500K)',
	'exif.LightSource.15' => 'White fluorescent (WW 3200 - 3700K)',
	'exif.LightSource.17' => 'Standard light A',
	'exif.LightSource.18' => 'Standard light B',
	'exif.LightSource.19' => 'Standard light C',
	'exif.LightSource.20' => 'D55',
	'exif.LightSource.21' => 'D65',
	'exif.LightSource.22' => 'D75',
	'exif.LightSource.23' => 'D50',
	'exif.LightSource.24' => 'ISO studio tungsten',
	'exif.LightSource.255' => 'Other light source',
	'exif.Flash' => 'Flash',
	'exif.Flash.0' => 'Flash did not fire',
	'exif.Flash.1' => 'Flash fired',
	'exif.Flash.5' => 'Strobe return light not detected',
	'exif.Flash.7' => 'Strobe return light detected',
	'exif.Flash.9' => 'Flash fired, compulsory flash mode',
	'exif.Flash.13' => 'Flash fired, compulsory flash mode, return light not detected',
	'exif.Flash.15' => 'Flash fired, compulsory flash mode, return light detected',
	'exif.Flash.16' => 'Flash did not fire, compulsory flash mode',
	'exif.Flash.24' => 'Flash did not fire, auto mode',
	'exif.Flash.25' => 'Flash fired, auto mode',
	'exif.Flash.29' => 'Flash fired, auto mode, return light not detected',
	'exif.Flash.31' => 'Flash fired, auto mode, return light detected',
	'exif.Flash.32' => 'No flash function',
	'exif.Flash.65' => 'Flash fired, red-eye reduction mode',
	'exif.Flash.69' => 'Flash fired, red-eye reduction mode, return light not detected',
	'exif.Flash.71' => 'Flash fired, red-eye reduction mode, return light detected',
	'exif.Flash.73' => 'Flash fired, compulsory flash mode, red-eye reduction mode',
	'exif.Flash.77' => 'Flash fired, compulsory flash mode, red-eye reduction mode, return light not detected',
	'exif.Flash.79' => 'Flash fired, compulsory flash mode, red-eye reduction mode, return light detected',
	'exif.Flash.89' => 'Flash fired, auto mode, red-eye reduction mode',
	'exif.Flash.93' => 'Flash fired, auto mode, return light not detected, red-eye reduction mode',
	'exif.Flash.95' => 'Flash fired, auto mode, return light detected, red-eye reduction mode',
	'exif.FlashEnergy' => 'Flash Energy',
	'exif.SpatialFrequencyResponse' => 'Spatial Frequency Response',
	'exif.FocalPlaneXResolution' => 'Focal Panel X-Resolution',
	'exif.FocalPlaneYResolution' => 'Focal Panel Y-Resolution',
	'exif.FocalPlaneResolutionUnit' => 'Focal Panel Resolution Unit',
	'exif.FocalPlaneResolutionUnit.1' => 'No absolute unit of measurement',
	'exif.FocalPlaneResolutionUnit.2' => 'Inch',
	'exif.FocalPlaneResolutionUnit.3' => 'Centimeter',
	'exif.ISO' => 'ISO Speed',
	'exif.ISOSpeedRatings' => 'ISO Speed',
	'exif.SensitivityType' => 'Sensitivity Type',
	'exif.SpectralSensitivity' => 'Spectral Sensitivity',
	'exif.RecommendedExposureIndex' => 'Recommended Exposure Index',
	'exif.ExifVersion' => 'EXIF version',
	'exif.FlashpixVersion' => 'Flashpix version',
	'exif.DateTime' => 'Date and Time',
	'exif.DateTimeOriginal' => 'Date and Time (Original)',
	'exif.DateTimeDigitized' => 'Date and Time (Digitized)',
	'exif.SubsecTime' => 'Sub Sec Time of Date and Time value',
	'exif.SubsecTimeOriginal' => 'Sub Sec Time of Date and Time (Original) value',
	'exif.SubsecTimeDigitized' => 'Sub Sec Time of Date and Time )Digitized) value',
	'exif.CompressedBitsPerPixel' => 'Compressed Bits per Pixel',
	'exif.ShutterSpeedValue' => 'Shutter Speed Value',
	'exif.FocalLength' => 'Focal Length',
	'exif.UserComment' => 'Comment',
	'exif.ColorSpace' => 'Color Space',
	'exif.PixelXDimension' => 'Pixel X-Dimension',
	'exif.PixelYDimension' => 'Pixel Y-Dimension',
	'exif.ExposureIndex' => 'Exposure Index',
	'exif.SensingMethod' => 'Sensing Method',
	'exif.SensingMethod.1' => 'Not defined',
	'exif.SensingMethod.2' => 'One-chip color area sensor',
	'exif.SensingMethod.3' => 'Two-chip color area sensor',
	'exif.SensingMethod.4' => 'Three-chip color area sensor',
	'exif.SensingMethod.5' => 'Color sequential area sensor',
	'exif.SensingMethod.7' => 'Trilinear sensor',
	'exif.SensingMethod.8' => 'Color sequential linear sensor',
	'exif.SceneType' => 'Scene Type',
	'exif.CFAPattern' => 'CFA Pattern',
	'exif.CFAPattern.0' => 'Red',
	'exif.CFAPattern.1' => 'Green',
	'exif.CFAPattern.2' => 'Blue',
	'exif.CFAPattern.3' => 'Cyan',
	'exif.CFAPattern.4' => 'Magenta',
	'exif.CFAPattern.5' => 'Yellow',
	'exif.CFAPattern.6' => 'White',
	'exif.CustomRendered' => 'Custom Rendered',
	'exif.CustomRendered.0' => 'Normal process',
	'exif.CustomRendered.1' => 'Custom process',
	'exif.ExposureMode' => 'Exposure Mode',
	'exif.ExposureMode.0' => 'Auto exposure',
	'exif.ExposureMode.1' => 'Manual exposure',
	'exif.ExposureMode.2' => 'Auto bracket',
	'exif.WhiteBalance' => 'White Balance',
	'exif.WhiteBalance.0' => 'Auto white balance',
	'exif.WhiteBalance.1' => 'Manual white balance',
	'exif.DigitalZoomRatio' => 'Digital Zoom Ratio',
	'exif.FocalLengthIn35mmFilm' => 'Focal Length in 35mm film equiv',
	'exif.SceneCaptureType' => 'Scene Capture Type',
	'exif.SceneCaptureType.0' => 'Standard',
	'exif.SceneCaptureType.1' => 'Landscape',
	'exif.SceneCaptureType.2' => 'Portrait',
	'exif.SceneCaptureType.3' => 'Night Scene',
	'exif.GainControl' => 'Gain Control',
	'exif.GainControl.0' => 'None',
	'exif.GainControl.1' => 'Low gain up',
	'exif.GainControl.2' => 'High gain up',
	'exif.GainControl.3' => 'Low gain down',
	'exif.GainControl.4' => 'High gain down',
	'exif.Contrast' => 'Contrast',
	'exif.Contrast.0' => 'Normal',
	'exif.Contrast.1' => 'Soft',
	'exif.Contrast.2' => 'Hard',
	'exif.Saturation' => 'Saturation',
	'exif.Saturation.0' => 'Normal',
	'exif.Saturation.1' => 'Low saturation',
	'exif.Saturation.2' => 'High saturation',
	'exif.Sharpness' => 'Sharpness',
	'exif.Sharpness.0' => 'Normal',
	'exif.Sharpness.1' => 'Soft',
	'exif.Sharpness.2' => 'Hard',
	'exif.DeviceSettingDescription' => 'Device Setting Description',
	'exif.SubjectDistanceRange' => 'Subject Distance Range',
	'exif.SubjectDistanceRange.0' => 'Unknown',
	'exif.SubjectDistanceRange.1' => 'Macro',
	'exif.SubjectDistanceRange.2' => 'Close view',
	'exif.SubjectDistanceRange.3' => 'Distant view',
	'exif.ImageUniqueID' => 'Unique Image ID',
	'exif.GPSVersionID' => 'GPS Version ID',
	'exif.GPSAltitude' => 'Altitude',
	'exif.GPSAltitudeRef' => 'Altitude Ref',
	'exif.GPSAltitudeRef.0' => 'Above sea level',
	'exif.GPSAltitudeRef.1' => 'Below sea level',
	'exif.GPSLatitude' => 'Latitude',
	'exif.GPSLongitude' => 'Longitude',

];