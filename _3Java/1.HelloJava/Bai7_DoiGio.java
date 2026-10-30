import java.util.Scanner;

public class Bai7_DoiGio {
     public void main()
    {
        Scanner sc = new Scanner(System.in);
        System.out.print("Nhập thời gian (giây): ");
        int giay = sc.nextInt();

        int ngay = giay / 86400;
        int gio = (giay % 86400) / 3600;
        int phut = ((giay % 86400) % 3600) / 60;
        int giaymoi = ((giay % 86400) % 3600) % 60;

       

        System.out.printf("%d giây = %d ngày %d giờ %d phút %d giây\n",giay, ngay, gio, phut, giaymoi);

    }
}
