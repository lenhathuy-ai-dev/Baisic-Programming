second = int(input("Nhập số giây: "))

hours = second // 3600
minutes = (second % 3600) // 60
seconds = (second % 3600) % 60

print(f"{second} giây = {hours} giờ {minutes} phút {seconds} giây!")