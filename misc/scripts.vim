if did_filetype()
  finish
endif

if !empty(filter(getline(1, 15), "v:val =~# 'FoamFile'"))
  setfiletype foam
endif
